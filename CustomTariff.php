<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'custom_service');

    //  if (($post['func'] ?? '') == 'savecompany'){
    // var_dump($post);exit;

        $comp = "SELECT t1.cet_code FROM tariff t1 WHERE t1.cet_code = '".$post['cet_code']."' ";
        // 
        $db->query($comp);
        // $res = $db->execute();
        $res = $db->rowCount() > 0 ? true : false;
        // var_dump($res);exit;

        if($res){
            echo json_encode(array('status' => false, 'message' => 'CET CODE EXIST'));
            exit;
        }
        
        $sql = "INSERT INTO tariff (`cet_code`,`su`,`description`,`vat`,`duty`,`levy`,`dov`) VALUES ('" . $post['cet_code'] . "', '" . $post['su'] . "', '" . $post['description'] . "', '" . $post['vat'] . "', '" . $post['duty']. "', '" . $post['levy']. "', '" . $post['dov'] . "')";
        // var_dump($sql);exit;
        try {
            $db->query($sql);
            // $res = $db->execute();
            
            $res = $db->rowCount();
            // var_dump($res);exit;
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