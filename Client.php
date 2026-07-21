<?php
    require_once 'libs/Database.php';
    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_phindol');
    

    // if (($post['func'] ?? '') === 'saveClient' || ($post['func'] ?? '') === 'autoclient') {
        if($post['client_name'] === "" || $post['client_name'] === null){
            echo json_encode(array('status' => false, 'message' => 'CLIENT name empty'));
            exit;
        }

        $client = "SELECT t1.client_code, t1.first_name FROM tec_client t1 WHERE t1.first_name = '".$post['first_name']."' ";
        // 
        $db->query($client);
        // $res = $db->execute();
        $res = $db->rowCount() > 0 ? true : false;
        // var_dump($res);exit;

        if($res){
            echo json_encode(array('status' => false, 'message ' => 'CLIENT EXIST', 'msg' => $res));
            exit;
        }

        $sql = "INSERT INTO tec_client (`username`,`agent_code`, `title`, `first_name`, `last_name`, `middle_name`, `address`, `religion`, `phone`, `client_code` , `submit_by`, `submit_on`, `modified_by`, `modified_on`, `occupation`, `state`, `country`, `id_type`, `id_number`, `business`, `username2`, `registered_date`, `birth_date`, `gender`, `marital_status`)
         VALUES ('" . $post['username'] . "', '" . $post['agent_code'] . "', '" . $post['title'] . "', '" . $post['first_name'] . "', '" . $post['last_name'] . "', '" . $post['middle_name'] . "', '" . $post['address'] . "', '" . $post['religion'] . "', '" . $post['phone'] . "', '" . $post['client_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['occupation'] . "', '" . $post['state'] . "', '" . $post['country'] . "' , '" . $post['id_type'] . "', '" . $post['id_number'] . "' , '" . $post['business'] . "', '" . $post['username2'] . "', '" . $post['registered_date'] . "', '" . $post['birth_date'] . "', '" . $post['gender'] . "', '" . $post['marital_status'] . "' )";
        // var_dump($sql);exit;
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
    // }