<?php


    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_phindol');

        if($post['client_code'] === "" ||  $post['subrisk_code'] === "" || $post['company_code'] === "" || $post['risk_code'] === "" || $post['ref_code'] === "" || $post['ref_code'] === null || $post['bus_prop'] === 0){
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

        //  DN
        $sql = "SELECT t1.debit_code, t1.policy_code, t1.gross_premium, t1.commission, t1.sum_insured FROM tec_policy_debit t1 WHERE t1.debit_code = '" . $post['ref_code'] . "' LIMIT 1";
        $db->query($sql);

        $check = $db->rowCount() > 0 ? true : false;
        if($check === false){
            echo json_encode(array('status' => false, 'message ' => 'NO DEBIT NOTE YET'));
            exit;
        }
        $debit = $db->single();

        $post['ref_code'] = $debit->debit_code;
        $post['net_amount'] = $post['bus_prop'] / 100 * $debit->gross_premium;
        $post['debit_account'] = $ledger_mapping->credit->debit_account;
        $post['credit_account'] = $ledger_mapping->credit->credit_account;
        $post["description"] = "BEING PREMIUM ON POLICY " . $debit->policy_code;

        try {
            $sql = "INSERT INTO tec_policy_credit (`credit_code`,`ref_code`,`company_code`, `debit_account`, `credit_account`,`trans_date`, `trans_mode`, `bus_type`, `status`, `description`, `bus_prop`, `submit_by`, `modified_by`, `approved_by`) VALUES ('" . $post['credit_code'] . "', '" . $post['ref_code'] . "', '" . $post['company_code'] . "', '" . $post['debit_account'] . "', '" . $post['credit_account'] . "', '" . $post['trans_date'] . "', '" . $post['trans_mode'] . "', '" . $post['bus_type'] . "', '" . $post['status'] . "', '" . $post['description'] . "', '" . $post['bus_prop'] . "', '" . $post['submit_by'] . "', '" . $post['modified_by'] . "', '" . $post['approved_by'] . "')";
            $db->query($sql);
            $res = $db->rowCount();
            // $res = $db->execute();
            // var_dump($res);exit;
            if ($res > 0) {

                // $gl = clone (object)$post;
                
                // $fields = array('account_code', 'account_name', 'debit', 'credit', 'trans_code', 'trans_type', 'ref_code', 'ref_detail', 'branch_code', 'policy_code', 'client_code', 'agent_code', 'company_code', 'trans_date', 'trans_detail', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by');

                // //delete existing
                // $db->query("DELETE FROM act_gledger WHERE trans_code LIKE '{$gl->credit_code}%' AND ref_code = '{$gl->ref_code}'");
                // $db->execute();

                
                // credit | DR
                //     $gl->account_code = $ledger_mapping->credit->debit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = $gl->net_amount;
                //     $gl->credit = '0';
                //     $gl->trans_code = $gl->credit_code;
                //     $gl->trans_type = 'CN';
                //     $gl->ref_detail = $gl->bus_type;
                //     $gl->trans_detail = $gl->description;
                    
                //     $sql =  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => ""));
            
                //     //credit | CR
                //     $gl->account_code = $ledger_mapping->credit->credit_account;
                //     $gl->account_name = $accountChart->{$gl->account_code}->account_name;
                //     $gl->debit = '0';
                //     $gl->credit = $gl->net_amount;
                    
                //     $sql .=  $sqlQuery->getQuery(array('array' => array($gl), 'action' => 'INSERT', 'fields' => $fields, 'table' => 'act_gledger', 'option' => "ADD"));

                //    $db->query($sql);
                //    $res = $db->execute();

                echo json_encode(array('status' => true, 'message' => $res));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message' => $res));
                exit;
            }
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    // }