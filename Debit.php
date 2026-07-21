<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_phindol');
    
    // var_dump($post['client_code']);exit;
    
    if($post['subrisk_code'] === '' || $post['risk_code'] === '' || $post['client_code'] === '' || $post['subrisk_name'] === 'NONE'){
        echo json_encode(array('status' => false, 'action' => 'debit', 'message' => 'Subrisk or risk name not found', 'ref_code' => '', "td_cell" => "#ref_code"));
        exit;
    }

    $sql = "SELECT t1.auto_id, t1.item, t1.branch_code, t1.risk_code, t1.debit_account, t1.credit_account FROM sys_tec_act t1 WHERE t1.branch_code = '".$post['branch_code']."' ";
    $sql .= "AND t1.risk_code = '" . $post['risk_code'] . "' ";
    
    $db->query($sql);
    $row = $db->resultSet();
    $ledger_mapping = (object)array();

    if (!empty($row)) {
        foreach ($row as $v) {
            $ledger_mapping->{$v->item} = $v;
        }
    }


    $sql = "SELECT t1.auto_id, t1.account_code, t1.account_name, t1.group_code, coalesce(t1.bank, '') as bank, t2.group_name, t2.range_min, t2.range_max, t2.base_code, t2.base_name, t2.dr_cr FROM act_account t1 LEFT JOIN (SELECT t21.group_code, t21.group_name, t21.range_min, t21.range_max, t22.base_code, t22.base_name, t22.dr_cr FROM act_group t21 LEFT JOIN act_base t22 ON t21.base_code = t22.base_code) t2 ON t1.group_code = t2.group_code WHERE 1=1 ";
    
    $db->query($sql);
    $row = $db->resultSet();
    
    $accountChart = (object)array();
    if (!empty($row)) {
        foreach ($row as $v) {
            $accountChart->{$v->account_code} = $v;
        }
    }
    
        $prem = ($post["gross_premium"] ?? 0) == 0;
        $comm = ($post["commission"] ?? 0) == 0;
        $sum_in = ($post["sum_insured"] ?? 0) == 0;
        
        $post['other_charge'] = 0;
        // var_dump($prem);exit;

        if($prem){

            $sql = "SELECT t1.*, t2.client_code, t2.client_name, t3.agent_name, t4.subrisk_name, t4.risk_code, t4.risk_name, t5.branch_name 
            FROM tec_policy t1 
            LEFT JOIN (SELECT t21.client_code, if(t21.business = 'Corporate',COALESCE(t21.first_name,''),TRIM(CONCAT(COALESCE(t21.title,''),' ',COALESCE(t21.last_name,''),' ',COALESCE(t21.first_name,'')))) client_name 
            FROM tec_client t21) t2 ON t1.client_code = t2.client_code 
            LEFT JOIN (SELECT t31.agent_code, t31.agent_name FROM tec_agent t31) t3 ON t1.agent_code = t3.agent_code 
            LEFT JOIN (SELECT t41.subrisk_code, t41.subrisk_name, t41.risk_code, t42.risk_name FROM cod_subrisk t41 
            LEFT JOIN cod_risk t42 ON t41.risk_code = t42.risk_code) t4 ON t1.subrisk_code = t4.subrisk_code 
            LEFT JOIN (SELECT t51.branch_code, t51.branch_name FROM cod_branch t51) t5 ON t1.branch_code = t5.branch_code 
            WHERE 1=1";
            
            $sql .= " AND t1.client_code = '" . $post['client_code'] . "' AND t1.subrisk_code = '".$post['subrisk_code']."' AND t4.risk_code = '".$post['risk_code']."' LIMIT 1";
            
            $db->query($sql);
            $policy = $db->single();
            
             // last  DN
            $sql = "SELECT t1.auto_id, t1.debit_code, t1.policy_code, t1.ref_code, t1.trans_info, t1.description, t1.referral, t1.bank_account, t1.credit_balance, t1.trans_mode, LEFT(t1.trans_date, 10) trans_date, LEFT(t1.start_date, 10) start_date, LEFT(t1.end_date, 10) end_date, t1.bus_type, t1.premium_rate, t1.currency_code, t1.currency_rate, t1.gross_premium, t1.sum_insured 
            FROM tec_policy_debit t1 
            WHERE t1.policy_code = '" . $policy->policy_code . "' AND (t1.bus_type = 'NEW' OR t1.bus_type = 'REN') ORDER BY t1.auto_id DESC LIMIT 1";
            
            // var_dump($sql);exit;
            $db->query($sql);
            $debit = $db->single();

            $policy->DN = $db->rowCount() > 0 ? true : false;
            // var_dump($policy->DN);exit;
            if($policy->DN === true){
                echo json_encode(array('status' => false, 'last_dn'=>true, 'action' => 'debit', 'ref_code' => $debit->debit_code, "td_cell" => "#ref_code"));
                exit;
            }
            if($policy->DN === false){
                 echo json_encode(array('status' => false, 'last_dn'=>false, 'action' => 'debit', 'ref_code' => '', "td_cell" => "#ref_code"));
                exit;
            }
        }

        if($comm){
            echo json_encode(array('status' => false, 'message' => '', "td_cell" => "#commission"));
            exit;
        }
        
        if($sum_in){
            echo json_encode(array('status' => false, 'message' => '', "td_cell" => "#sum_insured"));
            exit;
        }
        
        $sql = "SELECT t1.*, t2.client_code, t2.client_name, t3.agent_name, t4.subrisk_name, t4.risk_code, t4.risk_name, t5.branch_name 
        FROM tec_policy t1 
        LEFT JOIN (SELECT t21.client_code, if(t21.business = 'Corporate',COALESCE(t21.first_name,''),TRIM(CONCAT(COALESCE(t21.title,''),' ',COALESCE(t21.last_name,''),' ',COALESCE(t21.first_name,'')))) client_name 
        FROM tec_client t21) t2 ON t1.client_code = t2.client_code 
        LEFT JOIN (SELECT t31.agent_code, t31.agent_name FROM tec_agent t31) t3 ON t1.agent_code = t3.agent_code 
        LEFT JOIN (SELECT t41.subrisk_code, t41.subrisk_name, t41.risk_code, t42.risk_name FROM cod_subrisk t41 
        LEFT JOIN cod_risk t42 ON t41.risk_code = t42.risk_code) t4 ON t1.subrisk_code = t4.subrisk_code 
        LEFT JOIN (SELECT t51.branch_code, t51.branch_name FROM cod_branch t51) t5 ON t1.branch_code = t5.branch_code 
        WHERE 1=1";
        
        $sql .= " AND t1.client_code = '" . $post['client_code'] . "' AND t1.subrisk_code = '".$post['subrisk_code']."' AND t4.risk_code = '".$post['risk_code']."' ";
        
        $sql .= " LIMIT 1 ";
        //return $sql;
        
        $db->query($sql);
        $policy = $db->single();

        if(!empty($policy)) {
            $post['policy_code'] = $policy->policy_code;
            $post['client_code'] = $policy->client_code;
            // last  DN
            $sql = "SELECT t1.auto_id, t1.debit_code, t1.policy_code, t1.ref_code, t1.trans_info, t1.description, t1.referral, t1.bank_account, t1.credit_balance, t1.trans_mode, LEFT(t1.trans_date, 10) trans_date, LEFT(t1.start_date, 10) start_date, LEFT(t1.end_date, 10) end_date, t1.bus_type, t1.premium_rate, t1.currency_code, t1.currency_rate, t1.gross_premium, t1.sum_insured 
            FROM tec_policy_debit t1 
            WHERE t1.policy_code = '" . $policy->policy_code . "' AND (t1.bus_type = 'NEW' OR t1.bus_type = 'REN') ORDER BY t1.auto_id DESC LIMIT 1";
            
            $db->query($sql);
            $debit = $db->single();

            $policy->DN = $db->rowCount() > 0 ? $debit : false;
            
        }
        else{
            echo json_encode(array('status' => false, 'action'=>'debit', 'ref_code'=>'', "msg"=>"No policy code"));
            exit;
        }
        
        $sql = "SELECT t1.debit_code FROM tec_policy_debit t1 WHERE t1.debit_code = '" . $post['debit_code'] . "' LIMIT 1";
        
        $db->query($sql);
        $check = $db->rowCount() > 0 ? true : false;
        if($check){
            echo json_encode(array('status' => false, 'message' => 'DEBIT EXIST', 'action'=>'debit', 'ref_code' => $post['debit_code'], "td_cell" => "#ref_code"));
            exit;

        }
        
        $post['debit_account'] = $ledger_mapping->debit->debit_account;
        $post['credit_account'] = $ledger_mapping->debit->credit_account;

        if(empty($policy->DN)){
            $post['bus_type'] = 'NEW';
            $post['ref_code'] = $post['debit_code'];
            $post["description"] = "BEING PREMIUM ON POLICY " . $post['policy_code'];

            $sql = "INSERT INTO tec_policy_debit (`debit_code`,`ref_code`,`policy_code`, `client_code`, `agent_code`, `agent_prop`,`debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`,`gross_premium`, `vat_rate`, `com_rate`, `premium_rate`, `other_charge`,`description`,  `submit_by`, `submit_on` , `modified_by`, `modified_on`,  `approved_by`, `username2`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '" . $post['agent_prop'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['start_date'] . "', '" . $post['end_date'] . "', '" . $post['bus_type'] . "', '" . $post['sum_insured'] . "', '" . $post['gross_premium'] . "', '" . $post['vat_rate'] . "', '" . $post['com_rate'] . "', '" . $post['premium_rate'] . "', '" . $post['other_charge'] . "', '" . $post['description'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "',  '" . $post['username2'] . "')";
            
            $db->query($sql);
            // $res = $db->rowCount();
            $res = $db->execute();
            echo json_encode(array('status' => true, 'message' => 'SAVE SUCCESSFUL', 'action' => 'debit', 'ref_code' => $post['debit_code'], "td_cell" => "#ref_code"));
            exit;

        }
        else{

            $post['bus_type'] = 'REN';
            $post['ref_code'] = $policy->DN->ref_code;
            $post['description'] = "BEING RENEWAL PREMIUM ON POLICY " . $policy->policy_code;
            
            $sql = "INSERT INTO tec_policy_debit (`debit_code`,`ref_code`,`policy_code`, `client_code`, `agent_code`, `agent_prop`,`debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`,`gross_premium`, `vat_rate`, `com_rate`, `premium_rate`, `other_charge`,`description`,  `submit_by`, `submit_on` , `modified_by`, `modified_on`,  `approved_by`, `username2`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '" . $post['agent_prop'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['start_date'] . "', '" . $post['end_date'] . "', '" . $post['bus_type'] . "', '" . $post['sum_insured'] . "', '" . $post['gross_premium'] . "', '" . $post['vat_rate'] . "', '" . $post['com_rate'] . "', '" . $post['premium_rate'] . "', '" . $post['other_charge'] . "', '" . $post['description'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "',  '" . $post['username2'] . "')";
            
            $db->query($sql);
            // $res = $db->rowCount();
            $res = $db->execute();
            echo json_encode(array('status' => true, 'message' => 'SAVE SUCCESSFUL', 'action' => 'debit', 'ref_code' => $post['debit_code'], "td_cell" => "#ref_code"));
            exit;
        }




        // try {
        //     $db->query($sql);
        //     $res = $db->rowCount();
        //     // $res = $db->execute();
        //     // var_dump($res);exit;
        //     if ($res > 0) {

        //         // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$post['debit_code']}%' AND ref_code = '{$post['ref_code']}'");
        //         // $db->execute();
        //         // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');

        //         // $gl = clone (object)$post;
                
        //         // // // debit | DR
        //         // $gl->account_code = $ledger_mapping->debit->debit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = $gl->gross_premium;
        //         // $gl->credit = '0';
        //         // $gl->trans_code = $gl->debit_code;
        //         // $gl->trans_type = 'DN';
        //         // $gl->ref_code = $gl->debit_code;
        //         // $gl->ref_detail = $gl->bus_type;
        //         // $gl->trans_detail = $gl->trans_info ?? '';
                
        //         // $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
        //         // // // debit | CR
        //         // $gl->account_code = $ledger_mapping->debit->credit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = '0';
        //         // $gl->credit = $gl->gross_premium;
                
        //         // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                
        //         // // debit-com | DR
        //         // $gl->account_code = $ledger_mapping->{'debit-com'}->debit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = $gl->commission;
        //         // $gl->credit = '0';
        //         // $gl->trans_type = 'PYM';
        //         // $gl->trans_code = $gl->debit_code . '-COM';

        //         // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

        //         // // debit-com | CR
        //         // $gl->account_code = $ledger_mapping->{'debit-com'}->credit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = '0';
        //         // $gl->credit = $gl->commission;

        //         // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                
        //         // // debit-vat | DR
        //         // $gl->account_code = $ledger_mapping->{'debit-vat'}->debit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = $gl->vat;
        //         // $gl->credit = '0';
        //         // $gl->trans_type = 'VAT';
        //         // $gl->trans_code = $gl->debit_code . '-VAT';

        //         // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

        //         // // debit-vat | CR
        //         // $gl->account_code = $ledger_mapping->{'debit-vat'}->credit_account;
        //         // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
        //         // $gl->debit = '0';
        //         // $gl->credit = $gl->vat;

        //         // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
        //         // $db->query($sql);
        //         // $res = $db->execute();\
        //         // echo json_encode(array('status' => false, 'last_dn'=>true, 'ref_code' => $debit->debit_code, "td_cell" => "#debit_code"));
        //         // exit;


        //     } else {

        //         echo json_encode(array('status' => false, 'message' => $res, 'msg' => $post));
        //         exit;
        //     }
        // } catch (PDOException $e) {
        //     echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        //     exit;
        // }
    // }