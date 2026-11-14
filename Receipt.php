<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    $post = filter_input_array(INPUT_POST);
    
            // var_dump($post['ref_code']);exit;
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_busag');
    $sqlQuery = new SqlQuery();
    
    $prem = ($post["gross_premium"] ?? 0) == 0;
    
    if($prem){
        echo json_encode(array('status' => false, 'message' => 'GROSS PREMIUM EMPTY', "td_cell" => "#gross_premium"));
        exit;
    }
    if($post['subrisk_code'] === '' || $post['policy_code'] === '' || $post['client_code'] === '' || $post['receipt_code'] === ''){
        echo json_encode(array('status' => false,  "message" => "SOME REQUIRED PARAMETERS ARE EMPTY"));
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
    $sql = "SELECT t1.auto_id, t1.account_code, t1.account_name, t1.group_code, coalesce(t1.bank, '') as bank, t2.group_name, t2.range_min, t2.range_max, t2.base_code, t2.base_name, t2.dr_cr FROM act_account t1 
    LEFT JOIN (SELECT t21.group_code, t21.group_name, t21.range_min, t21.range_max, t22.base_code, t22.base_name, t22.dr_cr FROM act_group t21 
    LEFT JOIN act_base t22 ON t21.base_code = t22.base_code) t2 ON t1.group_code = t2.group_code WHERE 1=1 ";
    
    $db->query($sql);
    $row = $db->resultSet();

    $accountChart = (object)array();
    if (!empty($row)) {
        foreach ($row as $v) {
            $accountChart->{$v->account_code} = $v;
        }
    }

    $sql = "SELECT t1.debit_code, t1.policy_code, t1.gross_premium, t1.commission, t1.sum_insured from tec_policy_debit t1 WHERE t1.debit_code = '".$post['ref_code']."' ";
    
    $db->query($sql);
    $debit = $db->single();

    $post['debit_account'] = $ledger_mapping->{'rcp-online'}->debit_account;
    $post['credit_account'] = $ledger_mapping->{'rcp-online'}->credit_account;
    $post['gross_premium'] = $debit->gross_premium;
    $post['trans_info'] = $post['bank_description'];

    try {
        $sql = "INSERT INTO tec_policy_receipt (`receipt_code`,`ref_code`,`debit_account`, `credit_account`, `gross_premium`, `amt_received`, `trans_date`,`trans_mode`, `trans_info`, `bus_type`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['receipt_code'] . "', '" . $post['ref_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['gross_premium'] . "', '" . $post['amt_received'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['trans_info'] . "', '" . $post['bus_type'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
        // 
        $db->query($sql);
        // $res = $db->execute();
        $res = $db->rowCount();
        if ($res > 0 && $post['ledger'] === "true") {
            
            
            // var_dump($post);exit;
            $gl = clone (object)$post;
            $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');
        
            //delete existing
            $del_query = "DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->receipt_code}%' AND ref_code = '{$gl->ref_code}'";
            $db->query($del_query);
            $rrr = $db->execute();
            
            // debit-rcp | DR
            $gl->account_code = $gl->debit_account;
            $gl->account_name = $accountChart->{$gl->account_code}->account_name;
            $gl->debit = $gl->gross_premium;
            $gl->credit = '0';
            $gl->ref_detail = $gl->bus_type;
            $gl->trans_detail = $gl->trans_info;
            $gl->trans_code = $gl->receipt_code ?? '';
            $gl->trans_type = $gl->bus_type;
        
            $sql = $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
        
            // debit-rcp | CR
            $gl->account_code = $ledger_mapping->{'debit'}->debit_account;
            $gl->account_name = $accountChart->{$gl->account_code}->account_name;
            $gl->debit = '0';
            $gl->credit = $gl->gross_premium;
        
            $sql .= $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));
            // 

            $db->query($sql);
            $res = $db->rowCount();
            // $res = $db->execute();
            // var_dump($sql);exit;

            if($res > 0){
                echo json_encode(array('status' => true, 'message ' => 'Receipt Saved with ledger posting', 'msg' => $post));
                exit;

            }
        } 
        else if($res > 0 && $post['ledger'] === "false" ){

            echo json_encode(array('status' => true, 'message ' => 'Receipt Saved without ledger posting'));
            exit;
        }else{
            echo json_encode(array('status' => false, 'message ' => 'NOT SUCCESSFUL', 'data'=>$res));
            exit;

        }

    } catch (PDOException $e) {
        echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        exit;
    }

    
    // if($res > 0 && $post['ledger'] === "false" ){

    //     echo json_encode(array('status' => true, 'message ' => 'Receipt Saved without ledger posting'));
    //     exit;

    // }