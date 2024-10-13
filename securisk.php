<?php

    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_lib');
    $sqlQuery = new SqlQuery();
    $sql = "SELECT t1.auto_id, t1.subrisk_code, t1.subrisk_name, t1.alpha, t1.digit, t1.def_premium_rate, t1.def_com_rate, t1.risk_code, t1.status, t2.risk_name, LEFT(t1.modified_on, 16) modified_on FROM cod_subrisk t1 LEFT JOIN (SELECT t21.risk_code, t21.risk_name FROM cod_risk t21) t2 ON t1.risk_code = t2.risk_code WHERE 1=1 ";
    //
    $db->query($sql);
    $rows = $db->resultSet(); 
    $subriskObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $subriskObj->{$v->subrisk_name} = $v->subrisk_code;
        }
    }

    $sql = "SELECT t1.* FROM tec_company t1 ";
        
    $sql .= "ORDER BY t1.company_name";
    //return [$sql];
    
    $db->query($sql);
    $rows = $db->resultSet();
    $insurersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $insurersObj->{$v->company_name} = $v->company_code;
        }
    }

    // var_dump($insurersObj);exit;
    //$claimsFields = ["auto_id", "first_name", "claim_code", "debit_code", "trans_date", "notify_date", "loss_date", "loss_amount", "claim_status", "company_code", "submit_by", "submit_on", "modified_by", "modified_on", "doc_path"];
    //
   // $sql = $sqlQuery->getQuery(['array' => [$post], 'action' => 'INSERT', 'fields' => $claimsFields, 'table' => 'tec_claim', 'option' => ""]);
    // echo json_encode(["name" => "segun", "msg" => "i love segun"]);
    
    // //
    if (($post['func'] ?? '') == 'saveClient' || ($post['func'] ?? '') == 'autoclient') {
        
        $sqlcheck = "SELECT client_code FROM tec_client WHERE client_code = '" . $post['client_code'] . "' LIMIT 1";
        $sql = "INSERT INTO tec_client (`username`,`agent_code`, `title`, `first_name`, `last_name`, `middle_name`, `address`, `religion`, `phone`, `client_code` , `submit_by`, `submit_on`, `modified_by`, `modified_on`, `occupation`, `state`, `country`, `id_type`, `id_number`, `business`, `username2`, `registered_date`, `birth_date`, `gender`, `marital_status`)
         VALUES ('" . $post['username'] . "', '" . $post['agent_code'] . "', '" . $post['title'] . "', '" . $post['first_name'] . "', '" . $post['last_name'] . "', '" . $post['middle_name'] . "', '" . $post['address'] . "', '" . $post['religion'] . "', '" . $post['phone'] . "', '" . $post['client_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['occupation'] . "', '" . $post['state'] . "', '" . $post['country'] . "' , '" . $post['id_type'] . "', '" . $post['id_number'] . "' , '" . $post['business'] . "', '" . $post['username2'] . "', '" . $post['registered_date'] . "', '" . $post['birth_date'] . "', '" . $post['gender'] . "', '" . $post['marital_status'] . "' )";
        // $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('" . $post['username'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['first_name'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "')";
        // 
        try {
            $db->query($sqlcheck);
            $v = $db->single();
            if (!empty($v->client_name)) {
                echo json_encode(array('status' => false, 'message ' => $v));
                exit;
            } else {
                $db->query($sql);
                $res = $db->rowCount();
                
                if ($res > 0) {
                    echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                    exit;
                } else {

                    echo json_encode(array('status' => false, "my"=>"scared", 'message ' => $res, 'msg' => $post));
                    exit;
                }
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }
    //
    if (($post['func'] ?? '') == 'savepolicy' || ($post['func'] ?? '') == 'autopolicy') {
        // echo json_encode(array('message' => $post));exit;
        // $MYSQL_DUPLICATE_CODES = array(1062, 23000);
        $sqlcheck = "SELECT policy_code FROM tec_policy WHERE policy_code = '" . $post['policy_code'] . "' LIMIT 1";
        // if(str_contains($e, '1062 Duplicate entry')) return;
        // echo json_encode(array('status' => true, 'message '=> ""));exit;
        $sql = "INSERT INTO tec_policy (`client_code`,`policy_code`, `agent_code`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on` , `modified_by`, `modified_on`) VALUES ('" . $post['client_code'] . "', '" . $post['policy_code'] . "', '" . $post['agent_code'] . "', '" . $post['trans_date'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";

        try {
            $db->query($sqlcheck);
            //echo json_encode(array('message' => $v));exit;
            // $db->execute();
            $v = $db->single();
            //  echo json_encode(array('message' => $v));exit;
            if (!empty($v->client_code)) {
                echo json_encode(array('status' => false, 'message ' => $v));
                exit;
            } else {
                $db->query($sql);
                $res = $db->rowCount();
                //    echo json_encode($res);exit;
                if ($res > 0) {
                    echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                    exit;
                } else {

                    echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                    exit;
                }
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    if (($post['func'] ?? '') == 'savedebit' || ($post['func'] ?? '') == 'autodebit') {
        
        $sql = "SELECT t1.*, IF(COALESCE(t1.schedule, '') = '', '[]', t1.schedule) schedule, IF(COALESCE(t1.doc_path, '') = '', MD5(t1.policy_code), t1.doc_path) doc_path, t2.client_name, t3.agent_name, t4.subrisk_name, t4.risk_code, t4.risk_name, t5.branch_name 
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
            
            // last  DN
            $sql = "SELECT t1.debit_code, t1.ref_code, t1.trans_info, t1.description, IF(COALESCE(t1.schedule, '') = '', '[]', t1.schedule) schedule, t1.referral, t1.bank_account, t1.credit_balance, t1.trans_mode, LEFT(t1.trans_date, 10) trans_date, LEFT(t1.start_date, 10) start_date, LEFT(t1.end_date, 10) end_date, t1.bus_type, t1.premium_rate, t1.currency_code, t1.currency_rate, t1.gross_premium, t1.sum_insured 
            FROM tec_policy_debit t1 WHERE t1.policy_code = '" . $policy->policy_code . "' AND (t1.bus_type = 'NEW' OR t1.bus_type = 'REN') ORDER BY t1.trans_date DESC LIMIT 1";
            $db->query($sql);
            $policy->DN = $db->rowCount() > 0 ? $db->single() : false;
           
        }
        else{
            echo json_encode(array('status' => false));
            exit;

        }

        // var_dump($policy->DN);exit;
        $post_start_date = strtotime($post['start_date']);
        $post_end_date = strtotime($post['end_date']);
        $default_period = ($post_end_date - strtotime($post['end_date'] . '-1 year +1 day')) / (60*60*24);
        // $default_period = $post_end_date - strtotime(date('Y-m-d', strtotime($post['end_date'] . '-1 year +1 day'))) / (60*60*24);
        $period = round(($post_end_date - $post_start_date) / (60*60*24));
        $period_ratio = $period / $default_period;
        
        if(empty($policy->DN)){
            $post['bus_type'] = 'NEW';
            $post['ref_code'] = $post['debit_code'];
            $post["description"] = "BEING PREMIUM PAID ON POLICY " . $post['policy_code'];
        }else{
            $start_date = strtotime($policy->DN->start_date);
            $end_date = strtotime($policy->DN->end_date);
            
            if($post_start_date > $end_date && ($post_end_date > $end_date && $post_end_date > $start_date )){
                $post['bus_type'] = 'REN';
                $post['ref_code'] = $post['debit_code'];
                $post['description'] = "BEING RENEWAL PREMIUM ON POLICY " . $policy->policy_code;

            }else if(($post_start_date > $start_date && $post_start_date <= $end_date) && ($post_end_date === $end_date) ){
                $post['bus_type'] = 'ADD';
                $post['ref_code'] = $policy->DN->debit_code;
                $post['description'] = "BEING PREMIUM PAID ON POLICY " . $policy->policy_code;
            }else{
                echo json_encode(array('status' => false));
                exit;

            }
        }
        
        // var_dump($post['trans_mode']);exit;
        $post['commission_'] =  $post['commission'] - ((7.5/100) * $post['commission']);
        $post['vat_rate'] = 7.5;
        $post['vat'] = 0.075 * $post['commission'];
        $post['other_charge'] = $post['commission'] - ($post['commission_'] + $post['vat']);
        
        $post['premium_rate'] = $post['gross_premium'] / $post['sum_insured'] * 100 / $period_ratio;
        // $post['com_rate'] = $post['commission'] / $post['gross_premium'] * 100;
        $post['com_rate'] = ($post['commission'] * 100) / (1.075 * $post['gross_premium']);
        // var_dump($post);exit;
        
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

        $sql = "INSERT INTO tec_policy_debit (`debit_code`,`ref_code`,`policy_code`, `client_code`, `agent_code`, `agent_prop`,`debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`,`gross_premium`, `vat_rate`, `com_rate`, `premium_rate`, `other_charge`,`description`,  `submit_by`, `submit_on` , `modified_by`, `modified_on`,  `approved_by`, `approved_on`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '" . $post['agent_prop'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['start_date'] . "', '" . $post['end_date'] . "', '" . $post['bus_type'] . "', '" . $post['sum_insured'] . "', '" . $post['gross_premium'] . "', '" . $post['vat_rate'] . "', '" . $post['com_rate'] . "', '" . $post['premium_rate'] . "', '" . $post['other_charge'] . "', '" . $post['description'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "', '" . $post['approved_on'] . "')";
        
        // var_dump($sql);exit;

        try {
            $db->query($sql);
            $res = $db->rowCount();
            //    echo json_encode($res);exit;
            if ($res > 0) {
                
                // delete existing
                $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$post['debit_code']}%' AND ref_code = '{$post['ref_code']}'");
                $db->execute();
                // var_dump($post['debit_code']);exit;
                $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');

                $gl = clone (object)$post;
                // var_dump($gl);exit;
                
                // debit | DR
                $gl->account_code = $ledger_mapping->debit->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = $gl->gross_premium;
                $gl->credit = '0';
                $gl->trans_code = $gl->debit_code;
                $gl->trans_type = 'DN';
                $gl->ref_code = $gl->debit_code;
                $gl->ref_detail = $gl->bus_type;
                $gl->trans_detail = $gl->trans_info ?? '';
                
                $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
                // debit | CR
                $gl->account_code = $ledger_mapping->debit->credit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = '0';
                $gl->credit = $gl->gross_premium;
                
                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                
                // debit-com | DR
                $gl->account_code = $ledger_mapping->{'debit-com'}->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = $gl->commission_;
                $gl->credit = '0';
                $gl->trans_type = 'PYM';
                $gl->trans_code = $gl->debit_code . '-COM';

                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // debit-com | CR
                $gl->account_code = $ledger_mapping->{'debit-com'}->credit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = '0';
                $gl->credit = $gl->commission_;

                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                
                // debit-vat | DR
                $gl->account_code = $ledger_mapping->{'debit-vat'}->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = $gl->vat;
                $gl->credit = '0';
                $gl->trans_type = 'VAT';
                $gl->trans_code = $gl->debit_code . '-VAT';

                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                // debit-vat | CR
                $gl->account_code = $ledger_mapping->{'debit-vat'}->credit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = '0';
                $gl->credit = $gl->vat;

                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                $db->query($sql);
                $db->execute();

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

    if (($post['func'] ?? '') == 'savecredit' || ($post['func'] ?? '') == 'autocredit') {
        
        
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

        $post_start_date = strtotime($post['start_date']);
        $post_end_date = strtotime($post['end_date']);
        $default_period = ($post_end_date - strtotime($post['end_date'] . '-1 year +1 day')) / (60*60*24);
        // $default_period = $post_end_date - strtotime(date('Y-m-d', strtotime($post['end_date'] . '-1 year +1 day'))) / (60*60*24);
        $period = round(($post_end_date - $post_start_date) / (60*60*24));
        $period_ratio = $period / $default_period;
        
        // var_dump($post['status']);exit;
        $post['debit_account'] = $ledger_mapping->credit->debit_account;
        $post['credit_account'] = $ledger_mapping->credit->credit_account;
        $post['description'] = 'desc';
        $post['branch_code'] = 'LAG/01/001';
        $post['currency_code'] = 'NGN';
        $post['currency_rate'] = '1';
        
        $post['commission_'] =  $post['commission'] - ((7.5/100) * $post['commission']);
        $post['vat_rate'] = 7.5;
        $post['vat'] = 0.075 * $post['commission'];
        $post['other_charge'] = $post['commission'] - ($post['commission_'] + $post['vat']);
        
        $post['premium_rate'] = $post['gross_premium'] / $post['sum_insured'] * 100 / $period_ratio;
        $post['com_rate'] = $post['commission'] / $post['gross_premium'] * 100;

        try {
            $sql = "INSERT INTO tec_policy_credit (`credit_code`,`ref_code`,`company_code`, `bank_account`, `debit_account`, `credit_account`,`trans_date`, `trans_mode`, `bus_type`, `status`, `description`, `bus_prop`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['credit_code'] . "', '" . $post['ref_code'] . "', '" . $post['company_code'] . "', '" . $post['bank_account'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['bus_type'] . "', '" . $post['status'] . "', '" . $post['description'] . "', '" . $post['bus_prop'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            // var_dump($sql);exit;
            $db->query($sql);
            $res = $db->rowCount();
            if ($res > 0) {

                $gl = clone (object)$post;
                
                $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
                
                // delete existing
                $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->credit_code}%' AND ref_code = '{$gl->ref_code}'");
                $db->execute();

                
                // credit | DR
                $gl->account_code = $ledger_mapping->credit->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = $gl->net_amount;
                $gl->credit = '0';
                $gl->trans_code = $gl->credit_code;
                $gl->trans_type = 'CN';
                $gl->ref_detail = $gl->bus_type;
                $gl->trans_detail = $gl->description;
                
                $sql =  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
        
                // credit | CR
                $gl->account_code = $ledger_mapping->credit->credit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = '0';
                $gl->credit = $gl->net_amount;
                
                $sql .=  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                if ($gl->commission_ > 0) {
                
                    // debit-com | DR
                    $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = $gl->commission_;
                    $gl->credit = '0';
                    $gl->trans_type = 'PYM';
                    $gl->trans_code = $gl->credit_code . '-COM';
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                    // debit-com | CR
                    $gl->account_code = $ledger_mapping->{'debit-com'}->debit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = '0';
                    $gl->credit = $gl->commission_;
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                }

                if ($gl->vat > 0) {
                
                    // debit-vat | DR
                    $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = $gl->vat;
                    $gl->credit = '0';
                    $gl->trans_type = 'VAT';
                    $gl->trans_code = $gl->credit_code . '-VAT';
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                    // debit-vat | CR
                    $gl->account_code = $ledger_mapping->{'debit-vat'}->debit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = '0';
                    $gl->credit = $gl->vat;
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                }

                if ($gl->other_charge > 0) {
                
                    // debit-chg | DR
                    $gl->account_code = $ledger_mapping->{'debit'}->credit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = $gl->other_charge;
                    $gl->credit = '0';
                    $gl->trans_type = 'CHG';
                    $gl->trans_code = $gl->credit_code . '-CHG';
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
                
                    // debit-chg | CR
                    $gl->account_code = $ledger_mapping->{'debit-chg'}->debit_account;
                    $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                    $gl->debit = '0';
                    $gl->credit = $gl->other_charge;
                
                    $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            
                }

                //echo json_encode(array('status' => false, 'message' => $sql)); exit;
                // var_dump($sql);exit;
                $db->query($sql);
                $db->execute();

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

    
    if (($post['func'] ?? '') == 'savereceipt' || ($post['func'] ?? '') == 'autoreceipt') {
        
        
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
        $post['trans_info'] = $debit_note->description;
        $post['ref_code'] = $debit_note->debit_code;
        $post['trans_code'] = $post['receipt_code'];
        $post['trans_type'] = "RCP";
        // var_dump($post['trans_type']);exit;
        
        $post['debit_account'] = $ledger_mapping->{'rcp-online'}->debit_account;
        $post['credit_account'] = $ledger_mapping->{'rcp-online'}->credit_account;

        try {
            $sql = "INSERT INTO tec_policy_receipt (`receipt_code`,`ref_code`,`debit_account`, `credit_account`, `gross_premium`, `trans_date`,`trans_mode`, `trans_info`, `bus_type`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['receipt_code'] . "', '" . $post['ref_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['gross_premium'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['trans_info'] . "', '" . $post['bus_type'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            // 
            $db->query($sql);
            $res = $db->rowCount();
            if ($res > 0) {
                // var_dump($res);exit;
                $gl = clone (object)$post;
                        
                $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
            
                // delete existing
                $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->receipt_code}%' AND ref_code = '{$gl->ref_code}'");
                $db->execute();
            
                // debit-rcp | DR
                $gl->account_code = $gl->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = $gl->gross_premium;
                $gl->credit = '0';
                $gl->ref_detail = $gl->bus_type;
                $gl->trans_detail = $gl->trans_info;
            
                $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
            
                // debit-rcp | CR
                $gl->account_code = $ledger_mapping->{'debit'}->debit_account;
                $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                $gl->debit = '0';
                $gl->credit = $gl->gross_premium;
            
                $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            
                $db->query($sql);
                $db->execute();

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
                    </tr>
                    <tr>
                        <td onclick="clientsTable({result: '#result'})" style="cursor:pointer;"> Clients </td>
                        <td onclick="policyTable({result: '#result'})" style="cursor:pointer;"> policy </td>
                        <td onclick="debitTable({result: '#result'})" style="cursor:pointer;"> debit </td>
                        <td onclick="receiptTable({result: '#result'})" style="cursor:pointer;"> receipt </td>
                        <td onclick="creditTable({result: '#result'})" style="cursor:pointer;"> credit </td>
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
                    <thead class="res_head">
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

            var exceljson = [];
            let url = 'http://localhost/migration/securisk.php';
            let rows = [];
            let clients = {};
            const subriskObj = <?php echo json_encode($subriskObj) ?>;
            const insurersObj = <?php echo json_encode($insurersObj) ?>;
            // console.log(insurersObj);
            //client table
            function clientsTable(json) {
                let counter = 0;
                let fields = null;
                // exceljson = Object.values(exceljson);
                // console.log(exceljson)
                if(exceljson.length > 0){
                    fields = Object.keys(exceljson[0]);
                }

                //clean the table
                $(json.result).find('tr').remove();
                var clientFields = ['registered_date', 'username', 'start_date', 'end_date', 'agent_code', 'title', 'first_name', 'last_name', 'middle_name', 'client_name', 'gender', 'marital_status', 'business', 'address', 'state', 'country', 'religion', 'phone', 'client_code', 'occupation', 'birth_date', 'business', 'id_type', 'id_number', 'sector', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'username2'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    clientFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) {
                        if(v['insured'] === undefined || v['start_date'] === undefined) return;

                        if(((v['business'] ?? '').trim()) !== 'Corporate'){
                           let names = (v['insured'] ?? '').trim().split(' ');
                            //    console.log(names)
                            v['first_name'] = names[0] ?? '';
                            v['last_name'] = names[1] ?? '';
                            v['middle_name'] = names[2] ?? '';
                            v['business'] = v['business'] ?? 'Individual';
                            v['id_type'] = 'NATIONAL_ID_CARD';
                            v['id_number'] = '123' + i;

                            if((v['title'] ?? '') === 'Mr.'){
                                v['gender'] = "Male";
                                v['marital_status'] = 'Single';
                            }else if((v['title'] ?? '') === "Mrs."){
                                v['gender'] = 'Female';
                                v['marital_status'] = 'Married';
                            }
                            
                        }else{
                            v['first_name'] = (v['insured'] ?? '').trim();
                            v['middle_name'] = '';
                            v['last_name'] = (v['insured'] ?? '').trim();
                            // v['last_name'] = "";
                            v['title'] = "Mr.";
                            v['marital_status'] = "Single";
                            v['gender'] = "Male";
                            v['id_type'] = 'CAC_NUMBER';
                            v['id_number'] = '123' + i;
                            
                        }
                        // console.log(names)
                        counter++;
                        v['registered_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        
                        let mid = "000000" + counter;
                        let date = new Date(v['registered_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        // if(i == 0) i = 1;
                        v['username'] = 'lib' + i + '@' + 'gmail.com';
                        v['agent_code'] = 'A/20/000003';
                        let client_code =  'CL/LIB/' + mid.slice(-6) + '/' + monthYear;
                        let insured = v['insured'];
                        if(clients[insured] === undefined ){
                            clients[insured] = client_code;
                            v['client_code'] = client_code;

                        }  else{
                            v['client_code'] = clients[insured];
                        }

                        // DN/LA/000133/21

                        // v['title'] = 'Mr.';
                        v['client_name'] = v['insured'];
                        v['address'] = 'LAGOS';
                        v['phone'] = '345678765';
                        v['religion'] = 'CHRISTIANITY';
                        v['occupation'] = 'Businesses and financial';
                        v["title"] = v["title"] ?? '';
                        v['state'] = 'LAGOS';
                        v['country'] = 'NIGERIA';
                        v['sector'] = 'private';
                        // v['username2'] = "chosenyinka@gmail.com"; //stallwart
                        v['username2'] = "oladimeji.fapohunda@libroker.com";//lib
                        v['birth_date'] = moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['registered_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');

                        v['submit_by'] = 'oladimeji.fapohunda@libroker.com';//lib
                        // v['submit_by'] = 'chosenyinka@gmail.com';//stalwart
                        v['submit_on'] =  v['registered_date'];
                        v['modified_by'] = 'oladimeji.fapohunda@libroker.com';//lib
                        // v['modified_by'] = 'chosenyinka@gmail.com'; //stalwart
                        v['modified_on'] = v['registered_date'];
                        //
                        html = '<tr class="row">';
                        clientFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });
                    // console.log(clients);

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {
                        let row = {};
                        row['func'] = 'saveClient';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[clientFields[i]] = tr[i].innerText.replace(/'/g, '');

                            }
                            // console.log(row);return;
                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                        // console.log(row);
                    })

                }, 2000);

            }

            //policy
            function policyTable(json) {
                $(json.result).find('tr').remove();
                let policyFields = ['client_code', 'first_name', 'last_name', 'middle_name', 'policy_code', 'agent_code', 'trans_date', 'subrisk_name', 'subrisk_code', 'branch_code', 'submit_by', 'submit_on', 'modified_by', 'modified_on' ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    policyFields.forEach(function(v_, i_) {
                        //console.log(v_);
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) { 
                        
                        if(v['subrisk_name'] === undefined || v['policy_code'] === undefined) return;
                        // v['policy_code_'] = String($.trim(v['policy_code'])).split(' ')[0];
                        // v['policy_code'] = v['policy_code_'];
                        let subrisk_code = v['subrisk_name'].trim();
                        v['branch_code'] = 'LAG/01/001';
                        v['agent_code'] = 'A/20/000003';
                        v['subrisk_code'] = subriskObj[subrisk_code];
                        v['trans_date'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['submit_by'] = 'oladimeji.fapohunda@libroker.com';
                        // v['submit_by'] = 'chosenyinka@gmail.com';oladimeji.fapohunda@libroker.com stalwart
                        v['submit_on'] =  moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['modified_by'] = 'oladimeji.fapohunda@libroker.com';
                        // v['modified_by'] = 'chosenyinka@gmail.com'; stalwart
                        v['modified_on'] = moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        //
                        html = '<tr class="row">';
                        // console.log(v);return;
                        policyFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {
                        let row = {};
                        row['func'] = 'savepolicy';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[policyFields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');

                            }
                            // console.log(row);

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }

            //debit
            function debitTable(json) {
                $(json.result).find('tr').remove();
                let counter = 0;
                // $(json.result).find('tr').remove();
                // INSERT
                let debitFields = ['client_name', 'debit_code', 'ref_code', 'policy_code', 'client_code', 'agent_code', 'agent_prop', 'debit_account', 'credit_account', 'trans_date', 'trans_mode', 'risk_code', 'subrisk_name', 'subrisk_code', 'branch_code', 'start_date', 'end_date', 'bus_type','sum_insured', 'premium_rate', 'gross_premium', 'commission', 'com_rate', 'vat_rate', 'net_amount', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'approved_by', 'approved_on' ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        //console.log(v_);
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) { 
                        let sumInsured = parseFloat(v['sum_insured']);
                        // console.log(sumInsured);
                        if(v['gross_premium'] === undefined || v['sum_insured'] === undefined || sumInsured === 0  || v['risk_code'] === undefined) return;
                        
                        v['agent_prop'] = '100';
                        v['end_date'] =  moment(v['end_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        // v['modified_by'] = 'oladimeji.fapohunda@libroker.com';
                        v['approved_by'] = 'oladimeji.fapohunda@libroker.com';
                        v['approved_on'] = moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['currency_code'] = 'NGN';
                        v['currency_rate'] = '1';
                        // // v['modified_by'] = 'chosenyinka@gmail.com'; stalwart
                         v['start_date'] = moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        counter++;

                        let date = new Date(v['start_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        
                        let mid = "000000" + counter;
                        let debit_code =  'DN/LIB/' + mid.slice(-6) + '/' + monthYear;
                        v['debit_code'] = debit_code;
                        v['trans_mode'] = 'Transfer';
                        html = '<tr class="row">';
                        // console.log(v);return;
                        debitFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {

                        let row = {};
                        row['func'] = 'savedebit';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[debitFields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');

                            }
                            // console.log(row);return;

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }

            
            //debit
            function creditTable(json) {
                $(json.result).find('tr').remove();
                let counter = 0;
                // $(json.result).find('tr').remove();
                // INSERT
                // INSERT
                 let creditFields = ['credit_code', 'client_code', 'policy_code', 'debit_code', 'ref_code', 'sum_insured', 'gross_premium','commission', 'net_amount', 'start_date', 'end_date', 'risk_code', 'subrisk_name', 'company_code','insurer', 'bank_account', 'debit_account', 'credit_account', 'trans_date', 'trans_mode', 'bus_type', 'status', 'description', 'bus_prop', 'submit_by', 'modified_by', 'approved_by'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    creditFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });

                    html += '</tr>';
                    $(json.result).append(html);
                    exceljson.forEach(function(v, i) { 
                        if(v['net_amount'] === undefined) return;
                        counter++;
                        let date = new Date(v['start_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();

                        let mid = "000000" + counter;
                        let credit_code =  'CN/LIB/' + mid.slice(-6) + '/' + monthYear;
                        v['ref_code'] = v['debit_code'];
                        v['credit_code'] = credit_code;
                        v['bus_type'] = 'INS';
                        v['status'] = '1';
                        v['bank_account'] = '2000004';
                        let company_code = insurersObj[v['insurer']]
                        v['company_code'] = company_code;
                        v['bus_prop'] = 100;
                        html = '<tr class="row">';
                        // console.log(v);return;
                        creditFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {

                        let row = {};
                        row['func'] = 'savecredit';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {
                            for (let i = 0; i < tr.length; i++) {
                                row[creditFields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');

                            }
                            // console.log(row);return;

                            $.post(url, row, function(data) {
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
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

                        //debit
            function receiptTable(json) {
                $(json.result).find('tr').remove();
                let counter = 0;
                // INSERT
                let debitFields = ['client_name', 'receipt_code', 'debit_code', 'ref_code', 'policy_code', 'client_code', 'agent_code', 'agent_prop', 'debit_account', 'credit_account', 'trans_date', 'trans_mode', 'risk_code', 'subrisk_name', 'subrisk_code', 'branch_code', 'start_date', 'end_date', 'bus_type','sum_insured', 'premium_rate', 'gross_premium', 'commission', 'com_rate', 'vat_rate', 'net_amount', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'approved_by', 'approved_on' ];
                
                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        //console.log(v_);
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) { 
                        let sumInsured = parseFloat(v['sum_insured']);
                        // console.log(sumInsured);
                        if(v['gross_premium'] === undefined || v['sum_insured'] === undefined || sumInsured === 0  || v['risk_code'] === undefined) return;
                        counter++;

                        let date = new Date(v['start_date'])
                        let monthYear = date.getMonth() + 1 +""+ date.getFullYear();
                        
                        let mid = "000000" + counter;
                        let receipt_code =  'RCP/LIB/' + mid.slice(-6) + '/' + monthYear;
                        v['receipt_code'] = receipt_code;
                        v['ref_code'] = v['debit_code'];
                        v['bus_type'] = "RCP";
                        html = '<tr class="row">';
                        // console.log(v);return;
                        debitFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {

                        let row = {};
                        row['func'] = 'savereceipt';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[debitFields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');

                            }
                            // console.log(row);return;

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 2000);
            }


            // upload file
            function importexcel(event, json) {
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
                                exceljson = XLSX.utils.sheet_to_json(workbook.Sheets["JULY-DECEMBER"]);
                                // clientsTable(json);
                                // console.log(exceljson);
                            } else {
                                // console.log("scared2");
                                exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets[workbook.SheetNames[1]]);
                            }
                            //processLoad({});
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

            // processLoad
            // let processLoad = (json) => {
            //     // table records
            //     let count = 0;

            //     $('tr.row').each(function() {

            //         let row = {}
            //         let tr = $(this);
            //         //
            //         row.row_id = tr.index();
            //         row.registered_date = tr.find('td:eq(0)').html();
            //         row.username = tr.find('td:eq(1)').html();
            //         row.agent_code = tr.find('td:eq(2)').html();

            //         let client = tr.find('td:eq(3)').html().trim().toUpperCase();
            //         //row.title = (client.substr(0, 3) === 'MRS') ? 'Mrs.' : (client.substr(0, 2) === 'MR' ? 'Mr.' : '');
            //         //row.first_name = (client.substr(0, 3) === 'MRS') ? client.substr(3).trim() : (client.substr(0, 2) === 'MR' ? client.substr(2).trim() : client);
            //         row.first_name = client;
            //         row.last_name = tr.find('td:eq(4)').html();
            //         row.address = tr.find('td:eq(5)').html();
            //         row.state = tr.find('td:eq(6)').html();
            //         row.country = tr.find('td:eq(7)').html();
            //         row.religion = tr.find('td:eq(8)').html();
            //         row.phone = tr.find('td:eq(9)').html();
            //         row.client_code = tr.find('td:eq(10)').html();
            //         row.occupation = tr.find('td:eq(11)').html();
            //         row.business = tr.find('td:eq(12)').html();
            //         row.id_type = tr.find('td:eq(13)').html();
            //         row.id_number = tr.find('td:eq(14)').html();
            //         row.sector = tr.find('td:eq(15)').html();
            //         row.submit_by = tr.find('td:eq(16)').html();
            //         row.submit_on = tr.find('td:eq(17)').html();
            //         row.modified_by = tr.find('td:eq(18)').html();
            //         row.modified_on = tr.find('td:eq(19)').html();
            //         row.username2 = tr.find('td:eq(20)').html();


            //         rows.push(row);
            //         count++;
            //     });
            //     dataUpload({});
            // }

            let body_len = 0;
            let processload2 = (json) => {
                let heading = [];
                let body_len = 0;
                rows = [];
                let elem_heading = [...document.querySelector('#result tr').children];
                // console.log(document.querySelector('#result tr')); return;
                let body = [...document.querySelectorAll('#result tbody > .row')];
                let len = heading.length - 1;
                let counter = 0;
                elem_heading.forEach((v) => {
                    // 
                    heading.push(v.innerText);
                });
                //
                body.forEach((v) => {

                    let tr = [...v.children];
                    //
                    let row = {};
                    row['row_id'] = body_len;
                    counter = 0;
                    tr.forEach((v_) => {
                        row[heading[counter]] = v_.innerText;
                        counter++;
                    });
                    rows.push(row);
                    body_len++;
                });
                dataUpload({});
                // console.log(rows);
            }

            //

            let savedCount = 0;
            let alreadyExist = 0;
            let mytimer;
            let dataUpload = (json) => {
                // console.log(json);return;

                if (rows.length > 0) {
                    let row = rows.shift();
                    // if(row['row_id'] == 0){
                    //     dataUpload({});
                    //    // return;
                    // }
                    row.func = 'autoclient';
                    $.post(url, row, function(data) {
                        let current = $('#result').find('tr:eq(' + row.row_id + ')');
                        //
                        if (data.status) {
                            // savedCount++;

                            document.querySelector('#saved').innerText = savedCount++;
                            current.css({
                                'background-color': '#c4ffbd'
                            });
                        } else if (data.message == 1 || data.status == false) {
                            alreadyExist++;
                            document.querySelector('#alreadyExist').innerText = alreadyExist;
                            current.css({
                                'background-color': '#bdffff'
                            });
                        }
                        // scroll
                        if ($('#scroll').prop('checked'))
                            $('html,body').animate({
                                scrollTop: current.position().top
                            }, 0.5);
                        // next
                        if ($('#process').prop('checked')) {
                            setTimeout(function() {
                                dataUpload();

                            }, 1000);
                        }
                    }, 'JSON');
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
            }

            $(function($) {

                reset({});

            });
        </script>
</html>