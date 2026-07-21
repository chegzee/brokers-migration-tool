<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_thrive');
     
        // if (($post['func'] ?? '') == 'act_gledger'){
        $sql = "INSERT INTO act_gledger (`account_code`,`account_name`, `debit`, `credit`, `trans_code`, `trans_type`, `ref_code`, `branch_code`, `trans_date`, `trans_detail`, `beneficiary`, `currency_code`, `currency_rate`, `submit_by`) VALUES ('" . $post['account_code'] . "', '" . $post['account_name'] . "', '" . $post['debit'] . "', '" . $post['credit']. "', '" . $post['trans_code']. "', '" . $post['trans_type']. "', '" . $post['ref_code']. "', '" . $post['branch_code']. "', '" . $post['trans_date']. "', '" . $post['trans_detail']. "', '" . $post['beneficiary']. "', '" . $post['currency_code']. "', '" . $post['currency_rate']. "', '" . $post['submit_by']. "' )";
       
            // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            // var_dump($sql);exit;
            
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
    // }