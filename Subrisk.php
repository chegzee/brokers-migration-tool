<?php 
    require_once 'libs/Database.php';

    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_busag');
    
        if($post['subrisk_name'] === '' || $post['alpha'] === '' || $post['subrisk_name'] === 'NONE'){
            echo json_encode(array('status' => false, 'message ' => 'SUBRISK NAME EMPTY', 'msg' => $post));
            exit;
        }

        $sql_subrisk = "SELECT t1.subrisk_code FROM cod_subrisk t1 WHERE t1.subrisk_code='".$post['subrisk_code']."' ";
        $db->query($sql_subrisk);
        $subrisk = $db->rowCount() > 0 ? true : false;
        if($subrisk){
            echo json_encode(array('status' => false, 'message' => 'SUBRISK EXIST'));
            exit;

        }



        $sql = "INSERT INTO cod_subrisk (`subrisk_code`,`subrisk_name`, `risk_code`, `alpha`, `digit`, `submit_by`, `modified_by`) VALUES ('" . $post['subrisk_code'] . "', '" . $post['subrisk_name'] . "', '" . $post['risk_code'] . "', '" . $post['alpha'] . "', '" . $post['digit']. "', '" . $post['submit_by']. "', '" . $post['modified_by'] . "')";
        try {
            $db->query($sql);
            // $res = $db->execute();
            $res = $db->rowCount();
            // var_dump($res);exit;
            
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message' =>''));
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