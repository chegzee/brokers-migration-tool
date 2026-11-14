<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_busag');
    $sqlQuery = new SqlQuery();

    if($post['client_code'] === "" ||  $post['subrisk_code'] === "" || $post['company_code'] === "" || $post['risk_code'] === ""){
        echo json_encode(array('status' => false, 'message' => 'SOME PARAMETERS ARE EMPTY'));
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

    $sql = "SELECT t1.credit_code, t1.ref_code, t1.bus_prop, t2.debit_code, t2.gross_premium, t2.net_premium, t2.description, t2.policy_code FROM tec_policy_credit t1 LEFT JOIN (SELECT t21.debit_code, t21.description, t21.policy_code, t21.gross_premium, t21.net_premium FROM tec_policy_debit t21)t2 ON t1.ref_code = t2.debit_code
    WHERE t1.credit_code = '". $post['credit_code'] ."' ";
    $db->query($sql);
    $credit_note = $db->single();
    if(empty($credit_note)){
        echo json_encode(array('status' => false, "msg"=>"No credit note"));
        exit;
    }

    $gross_prem = $credit_note->net_premium;
    $bus_prop = $credit_note->bus_prop;

    $post['gross_premium'] = $bus_prop /100 * $gross_prem;

    $post['trans_info'] = "BEING PREMIUM PAID ON " . $credit_note->policy_code;
    $post['ref_code'] = $credit_note->credit_code;
    $post['trans_code'] = $post['payment_code'];
    $post['trans_type'] = "PYM";
    // $post['bus_prop'] = "PYM";
    // $post['credit_account'] = "1000005";
    
    $post['debit_account'] = $ledger_mapping->{'credit'}->credit_account;
    
    $sql = "SELECT t1.payment_code FROM tec_policy_payment t1 WHERE t1.payment_code = '" . $post['payment_code'] . "' LIMIT 1";
    
    $db->query($sql);
    $check = $db->rowCount() > 0 ? true : false;
    if($check){
        echo json_encode(array('status' => false, 'message' => 'PAYMENT EXIST'));
        exit;

    }

    try {
        $sql = "INSERT INTO tec_policy_payment (`payment_code`,`ref_code`,`debit_account`, `credit_account`, `gross_premium`, `trans_date`,`trans_mode`, `trans_info`, `bus_type`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['payment_code'] . "', '" . $post['ref_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['gross_premium'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['trans_info'] . "', '" . $post['bus_type'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
        // 
        $db->query($sql);
        $res = $db->execute();
        // $res = $db->rowCount();
        // 
        
        if ($res > 0  && $post['ledger'] === "true") {
            // var_dump($res);exit;
            $gl = clone (object)$post;
                    
            $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
        
            //delete existing
            $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->payment_code}%' AND ref_code = '{$gl->ref_code}'");
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
            $gl->account_code = $gl->credit_account;
            $gl->account_name = $accountChart->{$gl->account_code}->account_name;
            $gl->debit = '0';
            $gl->credit = $gl->gross_premium;
        
            $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
        
            $db->query($sql);
            $res = $db->execute();
            // var_dump($res);exit;

            
            if($res == true){
                echo json_encode(array('status' => true, 'message ' => 'Payment Saved with ledger posting'));
                exit;

            }

        }
        else if($res > 0 && $post['ledger'] === "false" ){
            echo json_encode(array('status' => true, 'message ' => 'Payment Saved without ledger posting'));
            exit;
        }else{
            echo json_encode(array('status' => false, 'message ' => 'NOT SUCCESSFUL', 'data'=>$res));
            exit;
        }
        
    } catch (PDOException $e) {
        echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        exit;
    }
       
    if($res > 0 && $post['ledger'] === "false" ){

        echo json_encode(array('status' => true, 'message ' => 'Receipt Saved without ledger posting'));
        exit;

    }