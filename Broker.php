<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_riskanalyst');
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
    $sql = "SELECT t1.* FROM tec_company t1 ORDER BY t1.company_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $insurersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $insurersObj->{strtolower($v->company_name)} = $v->company_code;
        }
    }

    
    // var_dump($subriskObj);exit;
    $sql = "SELECT t1.* FROM tec_company t1 WHERE t1.company_type = 'Brokerage' ";
    $db->query($sql);
    $rows = $db->resultSet();

    $brokersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $brokersObj->{strtolower($v->company_name)} = $v->company_code;
        }
    }
    // var_dump($brokersObj);exit;

    
    $sql = "SELECT t1.first_name, t1.client_name, t1.client_code FROM tec_client t1 ORDER BY t1.client_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $clients = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $clients->{strtolower($v->client_name)} = $v->client_code;
        }
    }

    $sql_pol = "SELECT t1.subrisk_code, t1.client_code, t3.client_name, t1.policy_code, t2.subrisk_name FROM tec_policy t1
    LEFT JOIN (SELECT t21.subrisk_code, t21.subrisk_name FROM cod_subrisk t21)t2 ON t1.subrisk_code = t2.subrisk_code
    LEFT JOIN (SELECT t31.client_code, t31.client_name FROM tec_client t31)t3 ON t1.client_code = t3.client_code
    ";
    $db->query($sql_pol);
    $rows_policies = $db->resultSet();

    $policies = (object)array();
    if ($rows_policies !== false) {
        foreach ($rows_policies as $p) {
            $policies->{strtolower($p->policy_code)} = $p;
        }
    }
    // var_dump($policies);exit;
    
    $sql = "SELECT t1.agent_name, t1.agent_code FROM tec_agent t1 ORDER BY t1.agent_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $agents = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $agents->{strtolower($v->agent_name)} = $v->agent_code;
        }
    }
    // var_dump($clients);exit;

    
    $sql = "SELECT t1.account_code, t1.account_name FROM act_account t1";
    $db->query($sql);
    $rows = $db->resultSet();

    $accounts = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $accounts->{strtolower($v->account_name)} = $v->account_code;
        }
    }
    
     if (($post['func'] ?? '') == 'savecoBroker'){
        // var_dump($post['company_code']);exit;
        if($post['company_code'] == 'BRK/000041/72023' || $post['company_code'] == 'BRK/000027/72023' || $post['company_code'] == 'BRK/000043/72023' || $post['company_code'] == 'BRK/000049/72023' || $post['company_code'] == 'BRK/000001/72023' ){
            echo json_encode(array('status' => false, 'message ' => 'DEFAULT BROKER PROP', "td_cell" => "#subrisk_name"));
            exit;
        }
        if($post['broker_name'] === "" || $post['broker_name'] === null  || $post['subrisk_name'] === "" || $post['subrisk_name'] === null || $post['subrisk_name'] === 'NONE' || $post['bus_prop'] === 0){
            echo json_encode(array('status' => false, 'message ' => 'INSURER EMPTY', "td_cell" => "#subrisk_name"));
            exit;
        }

        // var_dump($post);exit;
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

        // last  DN
        $sql = "SELECT t1.debit_code, t1.policy_code, t1.ref_code, t1.trans_info, t1.description, t1.referral, t1.bank_account, t1.credit_balance, t1.trans_mode, LEFT(t1.trans_date, 10) trans_date, LEFT(t1.start_date, 10) start_date, LEFT(t1.end_date, 10) end_date, t1.bus_type, t1.premium_rate, t1.currency_code, t1.currency_rate, t1.gross_premium, t1.sum_insured 
        FROM tec_policy_debit t1 
        WHERE t1.policy_code = '" . $policy->policy_code . "' AND (t1.bus_type = 'NEW' OR t1.bus_type = 'REN') ORDER BY t1.start_date DESC LIMIT 1";
        
        $db->query($sql);
        $debit = $db->single();

        $policy->DN = $db->rowCount() > 0 ? $debit : false;
        if($policy->DN === false){
            echo json_encode(array('status' => false, 'message ' => 'POLICY HAS NO DEBIT NOTE YET', "td_cell" => "#sum_insured"));
            exit;
        }
        $post['ref_code'] = $policy->DN->debit_code;

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

        $post['bank_account'] = '1010003';
        $post['debit_account'] = $ledger_mapping->credit->debit_account;
        $post['credit_account'] = $ledger_mapping->credit->credit_account;
        $post["description"] = "BEING PREMIUM ON POLICY " . $policy->policy_code;

        // var_dump($policy);exit;
        $sql = "INSERT INTO tec_policy_credit_broker (`credit_code`,`ref_code`, `company_code`, `bank_account`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `bus_type` , `status`, `description`, `bus_prop`, `submit_by`, `modified_by` , `approved_by`) VALUES ('" . $post['credit_code'] . "', '" . $post['ref_code'] . "', '" . $post['company_code'] . "', '" . $post['bank_account'] . "', '" . $post['debit_account']. "', '" . $post['credit_account']. "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['bus_type'] . "', '" . $post['status'] . "', '" . $post['description'] . "', '" . $post['bus_prop'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";

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