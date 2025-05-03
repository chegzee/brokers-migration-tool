<?php

    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_afriglobal');
    $sqlQuery = new SqlQuery();
    $sql = "SELECT t1.auto_id, t1.subrisk_code, t1.subrisk_name, t1.alpha, t1.digit, t1.def_premium_rate, t2.premium_rate, t2.com_rate, t2.vat_rate, t1.def_com_rate, t1.risk_code, t1.status, t2.risk_name, LEFT(t1.modified_on, 16) modified_on FROM cod_subrisk t1 LEFT JOIN (SELECT t21.risk_code, t21.risk_name, t21.premium_rate, t21.com_rate, t21.vat_rate FROM cod_risk t21) t2 ON t1.risk_code = t2.risk_code WHERE 1=1 ";
    //
    $db->query($sql);
    $rows = $db->resultSet(); 
    // var_dump($rows);exit;
    $subriskObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $subriskObj->{strtolower($v->subrisk_name)} = ["subrisk_code" =>$v->subrisk_code, "risk_code" =>$v->risk_code, "alpha"=>$v->alpha,  "digit"=>$v->digit, "premium_rate"=>$v->premium_rate, "com_rate"=>$v->com_rate, "vat_rate"=>$v->vat_rate ];
        }
    }
    // var_dump($subriskObj);exit;
    $sql = "SELECT t1.* FROM tec_company t1 ";
        
    $sql .= "ORDER BY t1.company_name";
    //return [$sql];
    
    $db->query($sql);
    $rows = $db->resultSet();
    // echo(json_encode($rows));exit;

    $insurersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $insurersObj->{$v->company_name} = $v->company_code;
        }
    }
    
    if (($post['func'] ?? '') == 'saveClient' || ($post['func'] ?? '') == 'autoclient') {
        if($post['client_name'] == "empty"){
            echo json_encode(array('status' => false, 'message ' => $v, "td_cell" => "#client_name"));
            exit;
        }
        $sql = "INSERT INTO tec_client (`username`,`agent_code`, `title`, `first_name`, `last_name`, `middle_name`, `address`, `religion`, `phone`, `client_code` , `submit_by`, `submit_on`, `modified_by`, `modified_on`, `occupation`, `state`, `country`, `id_type`, `id_number`, `business`, `username2`, `registered_date`, `birth_date`, `gender`, `marital_status`)
         VALUES ('" . $post['username'] . "', '" . $post['agent_code'] . "', '" . $post['title'] . "', '" . $post['first_name'] . "', '" . $post['last_name'] . "', '" . $post['middle_name'] . "', '" . $post['address'] . "', '" . $post['religion'] . "', '" . $post['phone'] . "', '" . $post['client_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['occupation'] . "', '" . $post['state'] . "', '" . $post['country'] . "' , '" . $post['id_type'] . "', '" . $post['id_number'] . "' , '" . $post['business'] . "', '" . $post['username2'] . "', '" . $post['registered_date'] . "', '" . $post['birth_date'] . "', '" . $post['gender'] . "', '" . $post['marital_status'] . "' )";
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, "my"=>"scared", 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savepolicy' || ($post['func'] ?? '') == 'autopolicy') {

        $client_code = "SELECT t1.client_code FROM tec_client t1 WHERE t1.client_name = '".$post['client_name']."' ";
        
        $db->query($client_code);
        $v = $db->single();
        if(!empty($v)){
            $post['client_code']= $v->client_code;
        }
        $sql = "INSERT INTO tec_policy (`client_code`,`policy_code`, `agent_code`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on` , `modified_by`, `modified_on`) VALUES ('" . $post['client_code'] . "', '" . $post['policy_code'] . "', '" . $post['agent_code'] . "', '" . $post['trans_date'] . "', '" . $post['subrisk_code']. "', '" . $post['branch_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";
        //
        try {
                $db->query($sql);
                // $res = $db->execute();
                $res = $db->rowCount();
                if ($res > 0) {
                    echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                    exit;
                } else {

                    echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                    exit;
                }
            // }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savedebit' || ($post['func'] ?? '') == 'autodebit') {
        // echo json_encode($post["commission"]);exit;
        // $post['sum_insured'] = ($post['gross_premium'] * 100) / $post['premium_rate'];
        // if($post['risk_code'] === 'V'){
        //     $post['com_rate'] = 12.5;
        // }else{
        //     $post['com_rate'] = 20;
        // }
        $prem = $post["gross_premium"] == 0;
        $comm = $post["commission"] == 0;
        $sum_in = $post["sum_insured"] == 0;
        if($sum_in){
            echo json_encode(array('status' => false, 'message ' => $v, "td_cell" => "#sum_insured"));
            exit;
        }
         if($prem){
            echo json_encode(array('status' => false, 'message ' => $v, "td_cell" => "#gross_premium"));
            exit;
        }
         if($comm){
            echo json_encode(array('status' => false, 'message ' => $v, "td_cell" => "#commission"));
            exit;
        }
        
        $sql = "SELECT t1.*, t2.client_code, t2.client_name, t3.agent_name, t4.subrisk_name, t4.risk_code, t4.risk_name, t5.branch_name 
        FROM tec_policy t1 
        LEFT JOIN (SELECT t21.client_code, if(t21.business = 'Corporate',COALESCE(t21.first_name,''),TRIM(CONCAT(COALESCE(t21.title,''),' ',COALESCE(t21.last_name,''),' ',COALESCE(t21.first_name,'')))) client_name 
        FROM tec_client t21) t2 ON t1.client_code = t2.client_code 
        LEFT JOIN (SELECT t31.agent_code, t31.agent_name FROM tec_agent t31) t3 ON t1.agent_code = t3.agent_code 
        LEFT JOIN (SELECT t41.subrisk_code, t41.subrisk_name, t41.risk_code, t42.risk_name FROM cod_subrisk t41 
        LEFT JOIN cod_risk t42 ON t41.risk_code = t42.risk_code) t4 ON t1.subrisk_code = t4.subrisk_code 
        LEFT JOIN (SELECT t51.branch_code, t51.branch_name FROM cod_branch t51) t5 ON t1.branch_code = t5.branch_code WHERE 1=1 ";
        
        $sql .= " AND t1.policy_code = '" . $post['policy_code'] . "' ";
        
        $sql .= " LIMIT 1 ";
        //return $sql;
        
        $db->query($sql);
        $policy = $db->single();
        if(!empty($policy)){
            $post['client_code'] = $policy->client_code;
            // last  DN
            $sql = "SELECT t1.debit_code, t1.policy_code, t1.ref_code, t1.trans_info, t1.description, t1.referral, t1.bank_account, t1.credit_balance, t1.trans_mode, LEFT(t1.trans_date, 10) trans_date, LEFT(t1.start_date, 10) start_date, LEFT(t1.end_date, 10) end_date, t1.bus_type, t1.premium_rate, t1.currency_code, t1.currency_rate, t1.gross_premium, t1.sum_insured 
            FROM tec_policy_debit t1 WHERE t1.policy_code = '" . $policy->policy_code . "' AND (t1.bus_type = 'NEW' OR t1.bus_type = 'REN') ORDER BY t1.trans_date DESC LIMIT 1";
            $db->query($sql);
            $policy->DN = $db->rowCount() > 0 ? $db->single() : false;
        }
        else{
            echo json_encode(array('status' => false, "msg"=>"No policy code"));
            exit;
        }

        // $post_start_date = strtotime($post['start_date']);
        // $post_end_date = strtotime($post['end_date']);
        // $default_period = ($post_end_date - strtotime($post['end_date'] . '-1 year +1 day')) / (60*60*24);
        // // $default_period = $post_end_date - strtotime(date('Y-m-d', strtotime($post['end_date'] . '-1 year +1 day'))) / (60*60*24);
        // $period = round(($post_end_date - $post_start_date) / (60*60*24));
        // $period_ratio = $period / $default_period;
        
        // if($period_ratio == 0){
        //     echo json_encode(array('status' => false, 'message ' => $v, "td_cell" => "#start_date"));
        //     exit;
        // }
        // $start_date = strtotime($policy->DN->start_date);
        // $end_date = strtotime($policy->DN->end_date);
        
        if(empty($policy->DN)){
            $post['bus_type'] = 'NEW';
            $post['ref_code'] = $post['debit_code'];
            $post["description"] = "BEING PREMIUM PAID ON POLICY " . $post['policy_code'];
        }else{

            $post['bus_type'] = 'REN';
            // $post['ref_code'] = $post['debit_code'];
            $post['ref_code'] = $policy->DN->ref_code;
            $post['description'] = "BEING RENEWAL PREMIUM ON POLICY " . $policy->policy_code;

            // $start_date = strtotime($policy->DN->start_date);
            // $end_date = strtotime($policy->DN->end_date);
            
            // if($post_start_date > $end_date && ($post_end_date > $end_date && $post_end_date > $start_date )){
            //     $post['bus_type'] = 'REN';
            //     // $post['ref_code'] = $post['debit_code'];
            //     $post['ref_code'] = $policy->DN->ref_code;
            //     $post['description'] = "BEING RENEWAL PREMIUM ON POLICY " . $policy->policy_code;

            // }else if(($post_start_date > $start_date && $post_start_date <= $end_date) && ($post_end_date === $end_date) ){
            //     $post['bus_type'] = 'ADD';
            //     $post['ref_code'] = $policy->DN->ref_code;
            //     $post['description'] = "BEING PREMIUM PAID ON POLICY " . $policy->policy_code;
            // }else{
            //     echo json_encode(array('status' => false, "msg"=>"Wrong period", "db"=>$policy->DN));
            //     exit;

            // }
        }
        
        // $post['vat_rate'] = 7.5;
        
        // $post['premium_rate'] = $post['gross_premium'] / $post['sum_insured'] * 100 / $period_ratio;
        // var_dump($post['commission']);exit;
        // $post['com_rate'] = ($post['commission'] * 100) / (1.075 * $post['gross_premium']);
        // var_dump($post['com_rate']);exit;
        // $post['commission_'] =  ($post['com_rate']/100) * $post['gross_premium'];
        // $post['vat'] = 0.075 * $post['commission_'];
        $post['other_charge'] = 0;
        
        $sql = "SELECT t1.auto_id, t1.item, t1.branch_code, t1.risk_code, t1.debit_account, t1.credit_account FROM sys_tec_act t1 WHERE t1.branch_code = 'LAG/01/001' ";
        $sql .= "AND t1.risk_code = '" . $post['risk_code'] . "' ";
        $db->query($sql);
        $row = $db->resultSet();
        $ledger_mapping = (object)array();
        if (!empty($row)) {
            foreach ($row as $v) {
                $ledger_mapping->{$v->item} = $v;
            }
        }
        $post['debit_account'] = $ledger_mapping->debit->debit_account;
        $post['credit_account'] = $ledger_mapping->debit->credit_account;

        $sql = "SELECT t1.auto_id, t1.account_code, t1.account_name, t1.group_code, coalesce(t1.bank, '') as bank, t2.group_name, t2.range_min, t2.range_max, t2.base_code, t2.base_name, t2.dr_cr FROM act_account t1 LEFT JOIN (SELECT t21.group_code, t21.group_name, t21.range_min, t21.range_max, t22.base_code, t22.base_name, t22.dr_cr FROM act_group t21 LEFT JOIN act_base t22 ON t21.base_code = t22.base_code) t2 ON t1.group_code = t2.group_code WHERE 1=1 ";
        
        $db->query($sql);
        $row = $db->resultSet();
    
        $accountChart = (object)array();
        if (!empty($row)) {
            foreach ($row as $v) {
                $accountChart->{$v->account_code} = $v;
            }
        }

        $sql = "INSERT INTO tec_policy_debit (`debit_code`,`ref_code`,`policy_code`, `client_code`, `agent_code`, `agent_prop`,`debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`,`gross_premium`, `vat_rate`, `com_rate`, `premium_rate`, `other_charge`,`description`,  `submit_by`, `submit_on` , `modified_by`, `modified_on`,  `approved_by`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '" . $post['agent_prop'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['start_date'] . "', '" . $post['end_date'] . "', '" . $post['bus_type'] . "', '" . $post['sum_insured'] . "', '" . $post['gross_premium'] . "', '" . $post['vat_rate'] . "', '" . $post['com_rate'] . "', '" . $post['premium_rate'] . "', '" . $post['other_charge'] . "', '" . $post['description'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "')";
        
        // var_dump($sql);exit;

        try {
            $db->query($sql);
            $res = $db->rowCount();
            // $res = $db->execute();
            // var_dump($res);exit;
            //    echo json_encode($res);exit;
            if ($res > 0) {

                //being comment bcos no need for ledger posting
                // delete existing
                // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$post['debit_code']}%' AND ref_code = '{$post['ref_code']}'");
                // $db->execute();
                // // var_dump($post['debit_code']);exit;
                // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');

                // $gl = clone (object)$post;
                // // var_dump($gl);exit;
                
                // // debit | DR
                // $gl->account_code = $ledger_mapping->debit->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->gross_premium;
                // $gl->credit = '0';
                // $gl->trans_code = $gl->debit_code;
                // $gl->trans_type = 'DN';
                // $gl->ref_code = $gl->debit_code;
                // $gl->ref_detail = $gl->bus_type;
                // $gl->trans_detail = $gl->trans_info ?? '';
                
                // $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
                // // debit | CR
                // $gl->account_code = $ledger_mapping->debit->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->gross_premium;
                
                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                
                // // debit-com | DR
                // $gl->account_code = $ledger_mapping->{'debit-com'}->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->commission_;
                // $gl->credit = '0';
                // $gl->trans_type = 'PYM';
                // $gl->trans_code = $gl->debit_code . '-COM';

                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // // debit-com | CR
                // $gl->account_code = $ledger_mapping->{'debit-com'}->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->commission_;

                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                
                // // debit-vat | DR
                // $gl->account_code = $ledger_mapping->{'debit-vat'}->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->vat;
                // $gl->credit = '0';
                // $gl->trans_type = 'VAT';
                // $gl->trans_code = $gl->debit_code . '-VAT';

                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // // debit-vat | CR
                // $gl->account_code = $ledger_mapping->{'debit-vat'}->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->vat;

                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                // $db->query($sql);
                // $db->execute();

                // debit-chg | DR
                // $gl->account_code = $ledger_mapping->{'debit-chg'}->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->other_charge;
                // $gl->credit = '0';
                // $gl->trans_type = 'CHG';
                // $gl->trans_code = $gl->debit_code . '-CHG';

                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // // debit-chg | CR
                // $gl->account_code = $ledger_mapping->{'debit-chg'}->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->other_charge;

                //$sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                // var_dump($sql);exit;
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savecredit' || ($post['func'] ?? '') == 'autocredit') {
        
        $sql = "SELECT t1.auto_id, t1.item, t1.branch_code, t1.risk_code, t1.debit_account, t1.credit_account FROM sys_tec_act t1 WHERE t1.branch_code = 'LAG/01/001' ";
        $sql .= "AND t1.risk_code = '" . $post['risk_code'] . "' ";
        $db->query($sql);
        $row = $db->resultSet();
        $ledger_mapping = (object)array();
        if (!empty($row)) {
            foreach ($row as $v) {
                $ledger_mapping->{$v->item} = $v;
            }
        }
        $post['debit_account'] = $ledger_mapping->credit->debit_account;
        $post['credit_account'] = $ledger_mapping->credit->credit_account;
        $post["description"] = "BEING PREMIUM ON POLICY " . $post['policy_code'];
        // var_dump($post['company_code']);exit;
        $sql = "SELECT t1.auto_id, t1.account_code, t1.account_name, t1.group_code, coalesce(t1.bank, '') as bank, t2.group_name, t2.range_min, t2.range_max, t2.base_code, t2.base_name, t2.dr_cr FROM act_account t1 LEFT JOIN (SELECT t21.group_code, t21.group_name, t21.range_min, t21.range_max, t22.base_code, t22.base_name, t22.dr_cr FROM act_group t21 LEFT JOIN act_base t22 ON t21.base_code = t22.base_code) t2 ON t1.group_code = t2.group_code WHERE 1=1 ";
        
        // $db->query($sql);
        // $row = $db->resultSet();
    
        // $accountChart = (object)array();
        // if (!empty($row)) {
        //     foreach ($row as $v) {
        //         $accountChart->{$v->account_code} = $v;
        //     }
        // }
        // $post['debit_account'] = "1103118";
        // $post['credit_account'] = "2006102";
        // $post['description'] = 'desc';
        // echo json_encode($post['risk_code']);exit;
        try {
            $sql = "INSERT INTO tec_policy_credit (`credit_code`,`ref_code`,`company_code`, `bank_account`, `debit_account`, `credit_account`,`trans_date`, `trans_mode`, `bus_type`, `status`, `description`, `bus_prop`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['credit_code'] . "', '" . $post['ref_code'] . "', '" . $post['company_code'] . "', '" . $post['bank_account'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['bus_type'] . "', '" . $post['status'] . "', '" . $post['description'] . "', '" . $post['bus_prop'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            $db->query($sql);
            $res = $db->rowCount();
            // $res = $db->execute();
            // echo json_encode($res);exit;
            if ($res > 0) {
                //ledger posting is neccessary
                // $gl = clone (object)$post;
                
                // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
                
                // // delete existing
                // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->credit_code}%' AND ref_code = '{$gl->ref_code}'");
                // $db->execute();

                
                // // credit | DR
                // $gl->account_code = $ledger_mapping->credit->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->net_amount;
                // $gl->credit = '0';
                // $gl->trans_code = $gl->credit_code;
                // $gl->trans_type = 'CN';
                // $gl->ref_detail = $gl->bus_type;
                // $gl->trans_detail = $gl->description;
                
                // $sql =  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
        
                // // credit | CR
                // $gl->account_code = $ledger_mapping->credit->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->net_amount;
                
                // $sql .=  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // if ($gl->commission_ > 0) {
                
                //     // debit-com | DR
                //     $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = $gl->commission_;
                //     $gl->credit = '0';
                //     $gl->trans_type = 'PYM';
                //     $gl->trans_code = $gl->credit_code . '-COM';
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                //     // debit-com | CR
                //     $gl->account_code = $ledger_mapping->{'debit-com'}->debit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = '0';
                //     $gl->credit = $gl->commission_;
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                // }

                // if ($gl->vat > 0) {
                
                //     // debit-vat | DR
                //     $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = $gl->vat;
                //     $gl->credit = '0';
                //     $gl->trans_type = 'VAT';
                //     $gl->trans_code = $gl->credit_code . '-VAT';
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                //     // debit-vat | CR
                //     $gl->account_code = $ledger_mapping->{'debit-vat'}->debit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = '0';
                //     $gl->credit = $gl->vat;
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                // }

                // if ($gl->other_charge > 0) {
                
                //     // debit-chg | DR
                //     $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = $gl->other_charge;
                //     $gl->credit = '0';
                //     $gl->trans_type = 'CHG';
                //     $gl->trans_code = $gl->credit_code . '-CHG';
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                //     // debit-chg | CR
                //     $gl->account_code = $ledger_mapping->{'debit-chg'}->debit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = '0';
                //     $gl->credit = $gl->other_charge;
                
                //     $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            
                // }

                // //echo json_encode(array('status' => false, 'message' => $sql)); exit;
                // // var_dump($sql);exit;
                // $db->query($sql);
                // $db->execute();

                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savereceipt' || ($post['func'] ?? '') == 'autoreceipt') {
        
        $sql = "SELECT t1.auto_id, t1.item, t1.branch_code, t1.risk_code, t1.debit_account, t1.credit_account FROM sys_tec_act t1 WHERE t1.branch_code = 'LAG/01/001' ";
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

        $sql = "SELECT * FROM tec_policy_debit WHERE debit_code = '". $post['debit_code'] ."' ";
        $db->query($sql);
        $debit_note = $db->single();
        if(empty($debit_note)){
            echo json_encode(array('status' => false, "msg"=>"No debit note"));
            exit;

        }
        
        // var_dump($debit_note);exit;
        $post['trans_info'] = $debit_note->description;
        $post['ref_code'] = $debit_note->debit_code;
        $post['trans_code'] = $post['receipt_code'];
        $post['trans_type'] = "RCP";
        
        $post['debit_account'] = $ledger_mapping->{'rcp-online'}->debit_account;
        $post['credit_account'] = $ledger_mapping->{'rcp-online'}->credit_account;

        // echo json_encode($post);exit;
        try {
            $sql = "INSERT INTO tec_policy_receipt (`receipt_code`,`ref_code`,`debit_account`, `credit_account`, `gross_premium`, `amt_received`, `trans_date`,`trans_mode`, `trans_info`, `bus_type`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['receipt_code'] . "', '" . $post['ref_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['gross_premium'] . "', '" . $post['amt_received'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['trans_info'] . "', '" . $post['bus_type'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            // 
            // var_dump($sql);exit;
            $db->query($sql);
            $res = $db->rowCount();
            // $res = $db->execute();
            // echo json_encode($res);exit;
            
            
            if ($res > 0) {
                //ledger postin is not necessary
                // var_dump($res);exit;
                // $gl = clone (object)$post;
                        
                // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
            
                // // delete existing
                // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->receipt_code}%' AND ref_code = '{$gl->ref_code}'");
                // $db->execute();
            
                // // debit-rcp | DR
                // $gl->account_code = $gl->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->amt_received;
                // $gl->credit = '0';
                // $gl->ref_detail = $gl->bus_type;
                // $gl->trans_detail = $gl->trans_info;
            
                // $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
            
                // // debit-rcp | CR
                // $gl->account_code = $ledger_mapping->{'debit'}->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->amt_received;
            
                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            
                // $db->query($sql);
                // $db->execute();

                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savepayment' || ($post['func'] ?? '') == 'autopayment') {
        // $sql = "SELECT t1.auto_id, t1.item, t1.branch_code, t1.risk_code, t1.debit_account, t1.credit_account FROM sys_tec_act t1 WHERE t1.branch_code = 'LAG/01/001' ";
        // $sql .= "AND t1.risk_code = '" . $post['risk_code'] . "' ";
        // $db->query($sql);
        // $row = $db->resultSet();

        // $ledger_mapping = (object)array();
        // if (!empty($row)) {
        //     foreach ($row as $v) {
        //         $ledger_mapping->{$v->item} = $v;
        //     }
        // }


        // $sql = "SELECT t1.auto_id, t1.account_code, t1.account_name, t1.group_code, coalesce(t1.bank, '') as bank, t2.group_name, t2.range_min, t2.range_max, t2.base_code, t2.base_name, t2.dr_cr FROM act_account t1 LEFT JOIN (SELECT t21.group_code, t21.group_name, t21.range_min, t21.range_max, t22.base_code, t22.base_name, t22.dr_cr FROM act_group t21 LEFT JOIN act_base t22 ON t21.base_code = t22.base_code) t2 ON t1.group_code = t2.group_code WHERE 1=1 ";
        
        // $db->query($sql);
        // $row = $db->resultSet();
    
        // $accountChart = (object)array();
        // if (!empty($row)) {
        //     foreach ($row as $v) {
        //         $accountChart->{$v->account_code} = $v;
        //     }
        // }

        
        $sql = "SELECT * FROM tec_policy_credit WHERE credit_code = '". $post['credit_code'] ."' ";
        $db->query($sql);
        $credit_note = $db->single();
        if(empty($credit_note)){
            echo json_encode(array('status' => false, "msg"=>"No credit note"));
            exit;

        }
        // var_dump($credit_note);exit;
        $post['trans_info'] = $credit_note->description;
        // $post['ref_code'] = $post['credit_code'];
        $post['ref_code'] = $credit_note->credit_code;
        $post['trans_code'] = $post['payment_code'];
        $post['trans_type'] = "PYM";
        $post['credit_account'] = "2000004";
        
        $post['debit_account'] = "2000002";
        // $post['debit_account'] = $ledger_mapping->{'credit'}->credit_account;
            // var_dump($post);exit;
            // echo json_encode($post);exit;

        try {
            $sql = "INSERT INTO tec_policy_payment (`payment_code`,`ref_code`,`debit_account`, `credit_account`, `gross_premium`, `trans_date`,`trans_mode`, `trans_info`, `bus_type`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['payment_code'] . "', '" . $post['ref_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['gross_premium'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['trans_info'] . "', '" . $post['bus_type'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            // 
            // var_dump($sql);exit;
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            // echo json_encode($res);exit;
            
            if ($res > 0) {
                // var_dump($res);exit;
                // $gl = clone (object)$post;
                        
                // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
            
                // // delete existing
                // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->payment_code}%' AND ref_code = '{$gl->ref_code}'");
                // $db->execute();
            
                // // debit-rcp | DR
                // $gl->account_code = $gl->debit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = $gl->net_amount;
                // $gl->credit = '0';
                // $gl->ref_detail = $gl->bus_type;
                // $gl->trans_detail = $gl->trans_info;
            
                // $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
            
                // // debit-rcp | CR
                // $gl->account_code = $gl->credit_account;
                // $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                // $gl->debit = '0';
                // $gl->credit = $gl->net_amount;
            
                // $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            
                // $db->query($sql);
                // $db->execute();

                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savecompany'){
        $sql = "INSERT INTO tec_company (`username`,`password`, `submit_by`, `company_code`, `company_type`, `company_name`, `address`, `country`, `phone` , `contact`) VALUES ('" . $post['username'] . "', '" . $post['password'] . "', '" . $post['submit_by'] . "', '" . $post['company_code'] . "', '" . $post['company_type']. "', '" . $post['company_name']. "', '" . $post['address'] . "', '" . $post['country'] . "', '" . $post['phone'] . "', '" . $post['contact'] . "')";
        // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, "my"=>"scared", 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    else if (($post['func'] ?? '') == 'savesubrisk'){
        $sql = "INSERT INTO cod_subrisk (`subrisk_code`,`subrisk_name`, `risk_code`, `alpha`, `digit`, `submit_by`, `modified_by`) VALUES ('" . $post['subrisk_code'] . "', '" . $post['subrisk_name'] . "', '" . $post['risk_code'] . "', '" . $post['alpha'] . "', '" . $post['digit']. "', '" . $post['submit_by']. "', '" . $post['modified_by'] . "')";
        // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, "my"=>"scared", 'message ' => $res, 'msg' => $post));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

?>
<!doctype html>

<html lang="en">

    <head>


        <meta charset="utf-8">
        <title>Securisk data migration</title>
        <style>
            .table-01 {
                border-collapse: collapse;
            }

            .table-01 th,
            .table-01 td {
                border: 1px solid #b8b8b8;
                padding: 0.5em;
            }

            .table-01 tr:nth-child(odd) {
                background-color: #f6f6f6;
            }

            .table-02 th,
            .table-02 td {
                font-size: 8pt;
            }
        </style>
    </head>

    <body>


        <div>
            <form >
                <table class="table-01" style="width: 180px; position: fixed; right: 8px; top: 4px; margin-bottom: 8px; border: 3px solid #000000; background-color: #ffffff; box-shadow: 2px 2px 2px #777777;">
                    <tr>
                        <td>Process</td>
                        <td style="width: 25px"><input type="checkbox" id="process" onclick="processload2({})"></td>
                        <td id="action_name"></td>
                    </tr>
                    <tr>
                        <td onclick="companyTable({result: '#result'})" style="cursor:pointer;"> insurers </td>
                        <td onclick="subriskTable({result: '#result'})" style="cursor:pointer;"> subrisk </td>
                        <td onclick="clientsTable({result: '#result'})" style="cursor:pointer;"> Clients </td>
                        <td onclick="policyTable({result: '#result'})" style="cursor:pointer;"> policy </td>
                        <td onclick="debitTable({result: '#result'})" style="cursor:pointer;"> debit </td>
                        <td onclick="creditTable({result: '#result'})" style="cursor:pointer;"> credit </td>
                        <td onclick="receiptTable({result: '#result'})" style="cursor:pointer;"> receipt </td>
                        <td onclick="paymentTable({result: '#result'})" style="cursor:pointer;"> payment </td>
                        <!-- <td onclick="debitTable({result: '#result'})" style="cursor:pointer;"> debit </td> -->
                    </tr>
                    <tr>
                        <td>Scroll</td>
                        <td><input type="checkbox" id="scroll" checked></td>
                        <td id="meta"> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="saved"></td>
                        <td id="alreadyExist"> </td>
                    </tr>
                </table>

                <table class="table-02" style="width: calc(100% - 185px); margin-bottom: 8px">

                    <tr>
                        <td colspan="2"><strong>Securisk Data Migration</strong></td>
                    </tr>
                    <tr>
                        <td>Select EXCEL file: <input id="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" onchange='importexcel(event,{excelfile:"#file", result: "#result"})'></td>
                        <td>Select EXCEL files only</td>
                    </tr>
                </table>

                <table id="result" class="table-01 table-02" style="width: calc(100% - 185px); margin-bottom: 8px">
                    <thead id="res_head">
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/xls.core.min.js"></script>
        <script src="js/xlsx.core.min.js"></script>
        <script src="js/ibdate.js"></script>

    </body>
            
        <script>
            
            let savedCount = 0;
            let alreadyExist = 0;
            let mytimer;
            var exceljson = [];
            let excel_data = [];
            let action = "";
            let url = 'http://localhost/migration/securisk.php';
            let rows = [];
            let clients = {};
            const subriskObj = <?php echo json_encode($subriskObj) ?>;
            const insurersObj = <?php echo json_encode($insurersObj) ?>;
            // console.log(subriskObj);

            let companyTable = (json)=>{
                // console.log(json);return;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecompany";
                $("#action_name").html("company saving");
                let counter = 0;
                let fields = null;
                if(exceljson.length > 0){
                    fields = Object.keys(exceljson[0]);
                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var companyfields = ['username', 'password', 'submit_by', 'company_code', 'company_name',  'company_type', 'address', 'country', 'phone', 'contact'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    companyfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        counter++;
                        // let dddd = String(v['insurer']).substring(0, String(v['insurer']).indexOf(" "))
                        let mid = "000000" + counter;
                        v['password'] = "Soa1tJj94/" + counter;
                        v["submit_by"] = "isaac@safamdigital.com";
                        v["company_type"] = "Insurance";
                        v['address'] = "LAGOS";
                        v['country'] = "Nigeria";
                        v['phone'] = "09876654565";
                        v['contact'] = v['company_name'];
                        v['rowNumber'] = i;
                        v['registered_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        let date = new Date(v['registered_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        v['username'] = String(v['company_name']).substring(0, String(v['company_name']).indexOf(" "))+ counter + '@' + 'gmail.com';
                        let company_code = 'CMP/' + mid.slice(-6) + "/" + monthYear;
                        
                        let insurer = v['company_name'];
                        let insured = v['company_name'];
                        if(insurersObj[insurer] === undefined ){
                            insurersObj[insurer] = company_code;
                            v['company_code'] = company_code;

                        }  else{
                            v['company_code'] = insurersObj[insurer];
                        }
                        
                        html = '<tr id="'+i+'" class="row">';
                        companyfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            
            let subriskTable = (json)=>{
                // console.log(json);return;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savesubrisk";
                $("#action_name").html("subrisk saving");
                let counter = 0;
                let fields = null;
                if(exceljson.length > 0){
                    fields = Object.keys(exceljson[0]);
                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let subriskfields = ['subrisk_code', 'subrisk_name', 'risk_code', 'alpha', 'digit', 'submit_by', 'modified_by'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    subriskfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        counter++;
                        v['registered_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        let date = new Date(v['registered_date'])
                        let month = date.getMonth()+1;
                        let mid = "000" + counter + month;
                        v["submit_by"] = "isaac@safamdigital.com";
                        v["modified_by"] = "isaac@safamdigital.com";
                        v['rowNumber'] = i;
                        let subrisk_code = 'S' + mid.slice(-3);
                        
                        let subrisk_name = v['subrisk_name'];
                        if(subriskObj[subrisk_name] === undefined ){
                            subriskObj[subrisk_name] = {"subrisk_code": subrisk_code, "risk_code": v['risk_code']};
                            v['subrisk_code'] = subrisk_code;
                            v['digit'] = mid.slice(-3);

                        }  else{
                            v['subrisk_code'] = subriskObj[subrisk_name]['subrisk_code'];
                            v['risk_code'] = subriskObj[subrisk_name]['risk_code'];
                            v['alpha'] = subriskObj[subrisk_name]['alpha'];
                            v['digit'] = subriskObj[subrisk_name]['digit'];
                        }
                        
                        html = '<tr id="'+i+'" class="row">';
                        subriskfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            //client table
            let  clientsTable = (json)=> {
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "saveClient";
                $("#action_name").html("Clients");
                let counter = 0;
                let fields = null;
                if(exceljson.length > 0){
                    fields = Object.keys(exceljson[0]);
                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var clientFields = ['registered_date', 'client_code', 'username', 'start_date', 'end_date', 'agent_code', 'title', 'first_name', 'last_name', 'middle_name', 'client_name', 'gender', 'marital_status', 'business', 'address', 'state', 'country', 'religion', 'phone', 'occupation', 'birth_date', 'business', 'id_type', 'id_number', 'sector', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'username2'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    clientFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    //
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        v['rowNumber'] = i;
                        if(typeof v['insured'] === "undefined") {
                            v['insured'] = "empty";
                        }
                        if(typeof v['trans_date'] === "undefined") {
                            v['trans_date'] = "";
                        }
                        if(typeof v['sum_insured'] === "undefined" ) {
                            v['sum_insured'] = 0;
                            // return
                        }
                        if(typeof v['gross_premium'] === "undefined" ) {
                            v['gross_premium'] = 0;
                            // return
                        }
                        if(typeof v['commission'] === "undefined" ) {
                            v['commission'] = 0;
                            // return
                        }
                        if(typeof v['net_amount'] === "undefined") {
                            v['net_amount'] = 0;
                            // return
                        }
                        if(typeof v['subrisk_name'] === "undefined") {
                            v['subrisk_name'] = "";
                            // return
                        }
                        if(typeof v['policy_code'] === "undefined") {
                            v['policy_code'] = "";
                            // return
                        }
                        if(((v['business'] ?? '').trim()) !== 'Corporate'){
                           let names = (v['insured'] ?? '').trim().split(' ')
                            v['first_name'] = names[0] ?? '';
                            v['last_name'] = names[1] ?? '';
                            v['middle_name'] = names[2] ?? '';
                            v['business'] = v['business'] ?? 'Individual';
                            v['id_type'] = 'NATIONAL_ID_CARD';
                            v['id_number'] = '123' + i;
                            v['client_name'] = v['title'] + " " + v['first_name'] + " " + v['last_name'];

                            if((v['title'] ?? '') === 'Mr.' || (v['title'] ?? '') === 'Bar.' || (v['title'] ?? '') === 'Alhaji'){
                                v['gender'] = "Male";
                                v['marital_status'] = 'Married';
                            }else if((v['title'] ?? '') === "Mrs."){
                                v['gender'] = 'Female';
                                v['marital_status'] = 'Married';
                            }else if((v['title'] ?? '') === "Miss."){
                                v['gender'] = 'Female';
                                v['marital_status'] = 'Single';
                            }
                            
                        }else{
                            v['first_name'] = (v['insured'] ?? '').trim()
                            v['middle_name'] = '';
                            v['last_name'] = (v['insured'] ?? '').trim();
                            v['title'] = "Mr.";
                            v['marital_status'] = "Single";
                            v['gender'] = "Male";
                            v['id_type'] = 'CAC_NUMBER';
                            v['id_number'] = '123' + i;
                            v['client_name'] = v['insured'];
                        }
                        counter++;
                        // v['registered_date'] =  moment(v['trans_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['registered_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        
                        let mid = "000000" + counter;
                        let date = new Date(v['registered_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        v['rowNumber'] = i;
                        v['username'] = 'afriglobalclient' + i + '@' + 'gmail.com';
                        v['agent_code'] = 'A/20/000003';
                        let client_code =  'CL/AFG/' + mid.slice(-6) + '/' + monthYear;
                        let insured = v['insured'];
                        if(clients[insured] === undefined ){
                            clients[insured] = client_code;
                            v['client_code'] = client_code;

                        }  else{
                            v['client_code'] = clients[insured];
                        }
                        v['address'] = 'LAGOS';
                        v['phone'] = '345678765';
                        v['religion'] = 'CHRISTIANITY';
                        v['occupation'] = 'Businesses and financial';
                        v["title"] = v["title"] ?? '';
                        v['state'] = 'LAGOS';
                        v['country'] = 'NIGERIA';
                        v['sector'] = 'private';
                        v['username2'] = "igbokwe@afriglobal.com.ng";
                        v['birth_date'] = moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');

                        v['submit_by'] = 'igbokwe@afriglobal.com.ng';//lib
                        v['submit_on'] =  v['registered_date'];
                        v['modified_by'] = 'igbokwe@afriglobal.com.ng';//lib
                        v['modified_on'] = v['registered_date'];
                        //
                        // exceljson[i] = v;
                        html = '<tr id="'+i+'" class="row">';
                        clientFields.forEach(function(v_, i_) {
                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td id="'+v_+'">' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'saveClient';
                        // console.log(row)
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);

            }
            //policy
            let policyTable = (json) =>{
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                // let url = './securisk.php?client=policy';
                action = "autopolicy";
                $("#action_name").html("Policy");
                $(json.result + "> thead").find('tr').remove();
                $(json.result + "> tbody").find('tr').remove();
                let policyFields = ['trans_date', 'policy_code', 'client_code','client_name', 'first_name', 'last_name', 'middle_name', 'agent_code', 'trans_date', 'subrisk_name', 'subrisk_code', 'risk_code', 'branch_code', 'submit_by', 'submit_on', 'modified_by', 'modified_on' ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    policyFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    // console.log(exceljson)
                    //
                    excel_data = excel_data.map(function(v, i) { 
                        // v['rowNumber'] = i;
                        v['branch_code'] = 'LAG/01/001';
                        v['agent_code'] = 'A/20/000003';
                        v['trans_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        // v['submit_by'] = 'Uchenna.okorie@fsl.ng';
                        // v['submit_on'] = v['trans_date'];
                        v['approved_by'] = 'migration@afriglobal.com.ng';
                        // v['modified_on'] = v['trans_date'];
                        if(v['policy_code'] == "TBA") v['policy_code'] = v['policy_broker_code'];
                        let subrisk_name = v['subrisk_name'].trim();
                        v['subrisk_code'] = (subriskObj[subrisk_name] ?? '')['subrisk_code'];
                        v['risk_code'] = (subriskObj[subrisk_name] ?? '')['risk_code'];
                        
                        html = '<tr id="'+i+'" class="row">';
                        policyFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + (v[v_]) + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        
                        return v;
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autopolicy';
                        if (rowId >= 0) {
                            // console.log(row)

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })
                }, 1000);
            }
            //debit
            let debitTable = (json) =>{
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savedebit";
                $("#action_name").html("Debit");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                // INSERT
                let debitFields = ['client_name', 'debit_code', 'policy_code','sum_insured', 'gross_premium', 'premium_rate','com_rate', 'vat_rate', 'net_amount', 'ref_code', 'commission', 'client_code', 'agent_code', 'agent_prop', 'trans_date', 'trans_mode', 'risk_code', 'subrisk_name', 'subrisk_code', 'branch_code', 'start_date', 'end_date', 'bus_type', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'approved_by' ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    //first = false;
                    excel_data = excel_data.map(function(v, i) { 
                        // let sumInsured = parseFloat(v['sum_insured']);
                        
                        let subrisk_name = v['subrisk_name'].toLowerCase();
                        v['risk_code'] = subriskObj[subrisk_name]['risk_code'];
                        v['subrisk_code'] = subriskObj[subrisk_name]['subrisk_code'];
                        v['premium_rate'] = subriskObj[subrisk_name]['premium_rate'];
                        v['com_rate'] = subriskObj[subrisk_name]['com_rate'];
                        v['vat_rate'] = subriskObj[subrisk_name]['vat_rate'];

                        v['sum_insured'] = (v['gross_premium'] * 100) / v['premium_rate'];
                        if(v['risk_code'] === 'V'){
                            v['com_rate'] = 12.5;
                        }else{
                            v['com_rate'] = 20;
                        }
                        v['agent_prop'] = '100';
                        v['trans_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['start_date'] = moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['end_date'] =  moment(v['end_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['approved_by'] = 'migration@afriglobal.com.ng';
                        // v['username2'] = 'migration@afriglobal.com.ng';
                        v['currency_code'] = 'NGN';
                        v['currency_rate'] = '1';
                        counter++;

                        // let date = new Date(v['start_date'])
                        // let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        
                        // let mid = "000000" + counter;
                        // let debit_code =  'DN/AFG/' + mid.slice(-6) + '/' + monthYear;
                        // v['debit_code'] = debit_code;
                        v['trans_mode'] = 'Transfer';
                        html = '<tr id="'+i+'" class="row">';
                        //
                        debitFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td id="'+v_+'">' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autodebit';
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        color:"blue", fontSize: "18px"
                                    })
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);
            }
            //credit
            let creditTable = (json) =>{
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecredit";
                $("#action_name").html("Credit");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                // INSERT
                 let creditFields = ['credit_code', 'client_code', 'policy_code', 'debit_code', 'ref_code', 'sum_insured', 'gross_premium','commission', 'net_amount', 'start_date', 'end_date', 'risk_code', 'subrisk_name', 'company_code','company_name', 'bank_account', 'trans_date', 'trans_mode', 'bus_type', 'status', 'description', 'bus_prop', 'submit_by', 'modified_by', 'approved_by'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    creditFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });

                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    excel_data = excel_data.map(function(v, i) { 
                        // v['rowNumber'] = i;
                        counter++;
                        let date = new Date(v['start_date']);
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();

                        let mid = "000000" + counter;
                        let credit_code =  'CN/AFG/' + mid.slice(-6) + '/' + monthYear;
                        v['ref_code'] = v['debit_code'];
                        v['credit_code'] = credit_code;
                        v['bus_type'] = 'INS';
                        v['status'] = '1';
                        v['rowNumber'] = i;
                        v['bank_account'] = '1000008';
                        // let insurer = v['company_name'];
                        let company_code = insurersObj[v['company_name']];
                        v['company_code'] = company_code;
                        v['bus_prop'] = 100;
                        html = '<tr id="'+i+'" class="row">';
                        creditFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autocredit';
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }
            //receipt
            let receiptTable = (json) =>{
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savereceipt";
                $("#action_name").html("Receipt");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                // INSERT
                let debitFields = ['client_name', 'receipt_code', 'debit_code', 'ref_code', 'policy_code', 'client_code', 'agent_code', 'agent_prop', 'debit_account', 'credit_account', 'trans_date', 'trans_mode', 'risk_code', 'subrisk_name', 'subrisk_code', 'branch_code', 'start_date', 'end_date', 'bus_type','sum_insured', 'premium_rate', 'gross_premium', 'amt_received', 'commission', 'com_rate', 'vat_rate', 'net_amount', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'approved_by' ];
                
                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);

                    excel_data = excel_data.map(function(v, i) { 
                        // let sumInsured = parseFloat(v['sum_insured']);
                        // v['rowNumber'] = i;
                        // if(v['gross_premium'] === undefined || v['sum_insured'] === undefined || sumInsured === 0  || v['risk_code'] === undefined) return;
                        counter++;

                        let date = new Date(v['start_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        
                        let mid = "000000" + counter;
                        let receipt_code =  'RCP/AFG/' + mid.slice(-6) + '/' + monthYear;
                        v['receipt_code'] = (v['receipt_code']) ?? receipt_code;
                        v['ref_code'] = v['debit_code'];
                        v['amt_received'] = (v['amount_received']) ?? 0;
                        v['trans_date'] = moment(v['receipt_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? v['start_date'];
                        v['bus_type'] = "RCP";
                        //////////////////////////////////////////////////////////////////////////
                        html = '<tr id="'+i+'" class="row">';
                        debitFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autoreceipt';
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }
            //payment
            let paymentTable = (json) => {
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0;
                action = "savepayment";
                $("#action_name").html("Payment");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                // INSERT
                let paymentFields = ['payment_code','credit_code', 'client_name', 'receipt_code', 'debit_code', 'ref_code', 'policy_code', 'client_code', 'agent_code', 'agent_prop', 'debit_account', 'credit_account', 'trans_date', 'trans_mode', 'risk_code', 'subrisk_name', 'subrisk_code', 'branch_code', 'start_date', 'end_date', 'bus_type','sum_insured', 'premium_rate', 'gross_premium', 'commission', 'com_rate', 'vat_rate', 'net_amount', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'approved_by' ];
                
                setTimeout(function() {

                    let html = '<tr disabled>';
                    paymentFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    excel_data = excel_data.map(function(v, i) { 
                        let sumInsured = parseFloat(v['sum_insured']);
                        counter++;

                        let date = new Date(v['start_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        
                        let mid = "000000" + counter;
                        let payment_code =  'P/FSL/' + mid.slice(-6) + '/' + monthYear;
                        v['payment_code'] = payment_code;
                        v['ref_code'] = v['credit_code'];
                        v['gross_premium'] = v['amount_remitted'] ?? v['gross_premium'];
                        v['trans_date'] = (moment(v['receipt_date'], 'DD/MM/YYYY').format('YYYY-MM-DD')) ?? v['trans_date'];
                        // v['trans_date'] = (moment(v['date_remitted'], 'DD/MM/YYYY').format('YYYY-MM-DD')) ?? v['trans_date'];
                        v['bus_type'] = "PYM";
                        html = '<tr id="'+i+'" class="row">';
                        paymentFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === "undefined") {
                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autopayment';
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }

            // import file
            let importexcel = (event, json) =>{
                //
                reset({});
                
                let regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
                /*Checks whether the file is a valid excel file*/
                if (regex.test($(json.excelfile).val().toLowerCase())) {
                    let xlsxflag = false; /*Flag for checking whether excel is .xls format or .xlsx format*/
                    if ($(json.excelfile).val().toLowerCase().indexOf(".xlsx") > 0) {
                        xlsxflag = true;
                    }
                    /*Checks whether the browser supports HTML5*/
                    if (typeof(FileReader) != "undefined") {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            let data = e.target.result;

                            /*Converts the excel data in to object*/
                            let workbook;
                            if (xlsxflag) {
                                workbook = XLSX.read(data, {
                                    type: 'binary'
                                });

                            } else {
                                workbook = XLS.read(data, {
                                    type: 'binary'
                                });
                            }

                            if (xlsxflag) {
                                exceljson = XLSX.utils.sheet_to_json(workbook.Sheets["october_2023"]);
                                console.log(exceljson);
                            } else {
                                exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets["october_2023"]);
                                console.log(exceljson);
                            }
                        }
                        if (xlsxflag) {
                            reader.readAsArrayBuffer($(json.excelfile)[0].files[0]);
                        } else {
                            reader.readAsBinaryString($(json.excelfile)[0].files[0]);
                        }
                    }
                    //
                    else {
                        alert("Sorry! Your browser does not support HTML5!");
                    }
                }
                //
                else {
                    alert("Please upload a valid Excel file!");
                }
                // createTable({});
                
                // scheduleTableCalc();

            }

            let body_len = 0;
            let processload2 = (json) => {
                
                savedCount = 0
                alreadyExist = 0;
                document.querySelector('#alreadyExist').innerText = alreadyExist;
                document.querySelector('#saved').innerText = savedCount
                rows = excel_data;
                dataUpload({})
                
            }

            let dataUpload = (json) => {

                if (rows.length > 0) {
                    let row = rows.shift();
                    row['func'] = action;
                    if($("#process").prop("checked") === true){
                        $.post(url, row, function(data) {
                            let current = $('#result > tbody').find('tr:eq(' + row['rowNumber'] + ')');
                            //
                            if (data.status) {
                                savedCount++;
                                document.querySelector('#saved').innerText = savedCount
                                current.css({
                                    'background-color': '#c4ffbd'
                                });
                                // scroll
                                // if ($('#scroll').prop('checked'))
                                // $('html,body').animate({
                                //     scrollTop: current.position().top
                                // }, 0.5);
                                //next
                                dataUpload({});
                                
                            } else {
                                alreadyExist++;
                                document.querySelector('#alreadyExist').innerText = alreadyExist;
                                current.css({
                                    'background-color': '#bdffff'
                                });
                                // // scroll
                                // if ($('#scroll').prop('checked'))
                                // $('html,body').animate({
                                //     scrollTop: current.position().top
                                // }, 0.5);
                                //next
                                dataUpload({});
                                
                            }
                        }, 'JSON');

                    }
                }else{
                    reset({});
                }
            }
            // reset
            let reset = (json) => {
                $('#process').prop({
                    'checked': false
                });
                $('#scroll').prop({
                    'checked': true
                });
                savedCount = 0
                alreadyExist = 0;
            }

            $(function($) {

                reset({});

            });
        </script>
</html>