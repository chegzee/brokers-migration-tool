<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_phindol');
    
    //   if (($post['func'] ?? '') === 'savepolicy' || ($post['func'] ?? '') === 'autopolicy') {

        if($post['insured'] === '' || $post['subrisk_name'] === '' || $post['subrisk_name'] === 'NONE'){
            echo json_encode(array('status' => false, 'message' => 'SUBRISK/INSURED CANNOT BE EMPTY'));
            exit;
        }

        $client_code = "SELECT t1.client_code FROM tec_client t1 WHERE t1.client_name = '".$post['client_name']."' ";
        
        $db->query($client_code);
        $v = $db->single();
        if(!empty($v)){
            $post['client_code']= $v->client_code;
        }
        
        $subrisk_code = "SELECT t1.subrisk_code FROM cod_subrisk t1 WHERE t1.subrisk_name = '".$post['subrisk_name']."' ";
        
        $db->query($subrisk_code);
        $v = $db->single();
        if(!empty($v)){
            $post['subrisk_code']= $v->subrisk_code;
        }

        $policy = "SELECT t1.client_code, t1.subrisk_code, t1.policy_code FROM tec_policy t1
        LEFT JOIN (SELECT t21.subrisk_code, t21.subrisk_name FROM cod_subrisk t21)t2 ON t1.subrisk_code = t2.subrisk_code
        WHERE t1.client_code = '".$post['client_code']."' AND t2.subrisk_code = '".$post['subrisk_code']."' ";
        // 
        $db->query($policy);
        // $res = $db->execute();
        $res_policy = $db->rowCount() > 0 ? true : false;

        if($res_policy){
            echo json_encode(array('status' => false, 'message' => 'POLICY EXIST'));
            exit;
        }

        $sql = "INSERT INTO tec_policy (`client_code`,`policy_code`, `agent_code`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on` , `modified_by`, `modified_on`) VALUES ('" . $post['client_code'] . "', '" . $post['policy_code'] . "', '" . $post['agent_code'] . "', '" . $post['trans_date'] . "', '" . $post['subrisk_code']. "', '" . $post['branch_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";
        // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            // var_dump($res);exit;
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message' => 'POLICY SAVE ROW COUNT-' . $res));
                exit;
            } else {
                $res = $db->execute();
                echo json_encode(array('status' => false, 'message' => 'POLICY NOT SAVE ROW COUNT-' . $res));
                exit;
            }
            // }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    // }