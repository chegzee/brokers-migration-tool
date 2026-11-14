<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_busag');

    //  if (($post['func'] ?? '') == 'savecompany'){
    // var_dump($post);exit;

        if($post["company_type"] === "Brokerage"){
            $post['company_name'] = $post['broker_company_name'];
            $post['contact'] = $post['broker_company_contact'];
            $post['company_code'] = $post['broker_company_code'];
        }

        if($post['company_name'] === ''){
            echo json_encode(array('status' => false, 'message' => 'COMPANY NAME EMPTY'));
            exit;
        }

        $comp = "SELECT t1.company_name, t1.company_code FROM tec_company t1 WHERE t1.company_name = '".$post['company_name']."' ";
        // 
        $db->query($comp);
        // $res = $db->execute();
        $res = $db->rowCount() > 0 ? true : false;
        // var_dump($post['submit_by']);exit;

        if($res){
            echo json_encode(array('status' => false, 'message' => 'COMPANY EXIST'));
            exit;
        }
        
        $sql = "INSERT INTO tec_company (`username`,`password`, `submit_by`, `company_code`, `company_type`, `company_name`, `address`, `country`, `phone` , `contact`) VALUES ('" . $post['username'] . "', '" . $post['password'] . "', '" . $post['submit_by'] . "', '" . $post['company_code'] . "', '" . $post['company_type']. "', '" . $post['company_name']. "', '" . $post['address'] . "', '" . $post['country'] . "', '" . $post['phone'] . "', '" . $post['contact'] . "')";
        // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            // var_dump($res);exit;
            $res = $db->rowCount();
            
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message' => 'SAVE SUCCESS: ROW COUNT IS- ' . $res));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message' => 'NOT SUCCESS: ROW COUNT IS- '. $res));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    // }