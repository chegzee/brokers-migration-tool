<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_thrive');
    $post = filter_input_array(INPUT_POST);
    if(($post['submit_by'] ?? '') === ''){
        $post['submit_by'] = 'isaac@safamdigital.com';

    }
    // var_dump($post);exit;
        $sql = "INSERT INTO act_account (`account_code`,`account_name`, `group_code`, `submit_by`) VALUES ('" . $post['account_code'] . "', '" . $post['account_name'] . "', '" . $post['group_code'] . "', '" . $post['submit_by']. "' )";
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            // var_dump($res);exit;
            
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