<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_phindol');

    // if($post['broker_company_code'] == 'BRK/ A 000001/12023'){
    //     echo json_encode(array('status' => false, 'message' => 'DEFAULT BROKER PROP'));
    //     exit;
    // }
    if( $post['subrisk_code'] === '' || $post['client_code'] === '' || $post['broker_company_code'] === "" || $post['broker_credit_code'] === "" || $post['broker_prop'] === 0){
        echo json_encode(array('status' => false, 'message' => 'SOME REQUIRED PARAMETERS ARE EMPTY'));
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
    //  DN
    // var_dump($post);exit;
    $sql = "SELECT t1.debit_code, t1.policy_code, t1.gross_premium, t1.commission FROM tec_policy_debit t1 WHERE t1.debit_code = '" . $post['ref_code'] . "' LIMIT 1";
    $db->query($sql);
    $check = $db->rowCount() > 0 ? true : false;
    if($check === false){
        echo json_encode(array('status' => false, 'message ' => 'NO DEBIT NOTE YET'));
        exit;
    }
    $debit = $db->single();

    $post['bank_account'] = '1010003';
    $post['debit_account'] = $ledger_mapping->credit->debit_account;
    $post['credit_account'] = $ledger_mapping->credit->credit_account;
    $post["description"] = "BEING PREMIUM ON POLICY " . $debit->policy_code;
    // $post['ref_code'] = $debit->debit_code;
    $post['credit_code'] = $post['broker_credit_code'];
    $post['company_code'] = $post['broker_company_code'];
    $post['bus_prop'] = $post['broker_prop'];

    // var_dump($policy);exit;
    $sql = "INSERT INTO tec_policy_credit_broker (`credit_code`,`ref_code`, `company_code`, `bank_account`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `bus_type` , `status`, `description`, `bus_prop`, `submit_by`, `modified_by` , `approved_by`) VALUES ('" . $post['credit_code'] . "', '" . $post['ref_code'] . "', '" . $post['company_code'] . "', '" . $post['bank_account'] . "', '" . $post['debit_account']. "', '" . $post['credit_account']. "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['bus_type'] . "', '" . $post['status'] . "', '" . $post['description'] . "', '" . $post['bus_prop'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";

    try {
        $db->query($sql);
        $res = $db->execute();
        // $res = $db->rowCount();
        // var_dump($res);exit;
        
        if ($res > 0) {
            echo json_encode(array('status' => true, 'message' => $res));
            exit;
        } else {

            echo json_encode(array('status' => false, 'message ' => $res));
            exit;
        }
    } catch (PDOException $e) {
        echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        exit;
    }