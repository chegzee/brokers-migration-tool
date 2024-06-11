<?php

    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    
    $post = filter_input_array(INPUT_POST);
    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_securisk');
    $sqlQuery = new SqlQuery();
    //
    $claimsFields = ["auto_id", "first_name", "claim_code", "debit_code", "trans_date", "notify_date", "loss_date", "loss_amount", "claim_status", "company_code", "submit_by", "submit_on", "modified_by", "modified_on", "doc_path"];
   // $debitFields = ["auto_id", "debit_code", "ref_code", "policy_code", "client_code", "agent_code", "company_code", "agent_code2", "agent_prop", "bank_account", "debit_account", "credit_account", "trans_date", "trans_mode", "trans_info", "submit_code", "branch_code", "start_date", "end_date", "email_date", "bus_type", "status", "description", "schedule", "referal", "sum_insured", "premium_rate", "gross_premium", "com_rate", "vat_rate", "other_charge", "credit_balance", "return_premium", "return_date", "return_paid_amount", "return_paid_date", "currency_code", "submit_by", "submit_on", "modified_by", "modified_on", "approved_by", "approved_on", "doc_path", "policy_detail", "manual_upload"];
    //
    $sql = $sqlQuery->getQuery(['array' => [$post], 'action' => 'INSERT', 'fields' => $claimsFields, 'table' => 'tec_claim', 'option' => ""]);
    echo(["name" => "segun", "msg" => "i love segun"]);
    
    // //
    // if ($post['func'] == 'saveClient' || $post['func'] == 'autoclient') {
    //     // $MYSQL_DUPLICATE_CODES = array(1062, 23000);
    //     $sqlcheck = "SELECT client_code FROM tec_client WHERE first_name = '" . $post['first_name'] . "' LIMIT 1";
    //     // if(str_contains($e, '1062 Duplicate entry')) return;
    //     // echo json_encode(array('status' => true, 'message '=> ""));exit;
    //     $sql = "INSERT INTO tec_client (`username`,`agent_code`, `first_name`, `last_name`, `address`, `religion`, `phone`, `client_code` , `submit_by`, `submit_on`, `modified_by`, `modified_on`, `occupation`, `state`, `country`, `id_type`, `id_number`, `business`, `username2`, `registered_date`) VALUES ('" . $post['username'] . "', '" . $post['agent_code'] . "', '" . $post['first_name'] . "', '" . $post['last_name'] . "', '" . $post['address'] . "', '" . $post['religion'] . "', '" . $post['phone'] . "', '" . $post['client_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['occupation'] . "', '" . $post['state'] . "', '" . $post['country'] . "' , '" . $post['id_type'] . "', '" . $post['id_number'] . "' , '" . $post['business'] . "', '" . $post['username2'] . "', '" . $post['registered_date'] . "' )";
    //     // $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('" . $post['username'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['first_name'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "')";

    //     try {
    //         $db->query($sqlcheck);
    //         //  echo json_encode(array('message' => $db->execute()));exit;
    //         $v = $db->single();
    //         //  echo json_encode(array('message' => $v));exit;
    //         if ($v->client_code) {
    //             echo json_encode(array('status' => false, 'message ' => $v));
    //             exit;
    //         } else {
    //             $db->query($sql);
    //             $res = $db->rowCount();
    //             //   echo json_encode($res);exit;
    //             if ($res > 0) {
    //                 echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
    //                 exit;
    //             } else {

    //                 echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
    //                 exit;
    //             }
    //         }
    //     } catch (PDOException $e) {
    //         echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //         exit;
    //     }
    // }
    // //
    // if ($post['func'] == 'savepolicy' || $post['func'] == 'autopolicy') {
    //     // echo json_encode(array('message' => $post));exit;
    //     // $MYSQL_DUPLICATE_CODES = array(1062, 23000);
    //     $sqlcheck = "SELECT policy_code FROM tec_policy WHERE policy_code = '" . $post['policy_code'] . "' LIMIT 1";
    //     // if(str_contains($e, '1062 Duplicate entry')) return;
    //     // echo json_encode(array('status' => true, 'message '=> ""));exit;
    //     $sql = "INSERT INTO tec_policy (`client_code`,`policy_code`, `agent_code`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on` , `modified_by`, `modified_on`) VALUES ('" . $post['client_code'] . "', '" . $post['policy_code'] . "', '" . $post['agent_code'] . "', '" . $post['trans_date'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";


    //     try {
    //         $db->query($sqlcheck);
    //         //echo json_encode(array('message' => $v));exit;
    //         // $db->execute();
    //         $v = $db->single();
    //         //  echo json_encode(array('message' => $v));exit;
    //         if ($v->client_code) {
    //             echo json_encode(array('status' => false, 'message ' => $v));
    //             exit;
    //         } else {
    //             $db->query($sql);
    //             $res = $db->rowCount();
    //             //    echo json_encode($res);exit;
    //             if ($res > 0) {
    //                 echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
    //                 exit;
    //             } else {

    //                 echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
    //                 exit;
    //             }
    //         }
    //     } catch (PDOException $e) {
    //         echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //         exit;
    //     }
    // }

    // if ($post['func'] == 'process') {
    //     // client exists
    //     // INSERT INTO `tec_client` (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `last_name`, `middle_name`, `title`, `religion`, `address`, `town`, `phone`, `email2`, `phone2`, `birth_date`, `gender`, `marital_status`, `occupation`, `state`, `country`, `sector`, `business`, `bvn_number`, `id_type`, `id_number`, `picture`, `client_code`, `agent_code`, `username2`, `doc_path`) VALUES ('kidudu@me.com', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', NULL, NULL, 0, '2021-04-20 10:39:16', '2021-04-20 10:39:18', '2021-04-20 10:39:22', NULL, NULL, NULL, '1', NULL, 'echezona.i@epicureinsurancebrokers.com', '2021-04-20 10:39:18', NULL, '2021-04-20 10:39:22', 'OGHENAKPOBO', 'IDUDU', NULL, 'Mr.', 'Christianity', 'C5 Millenium Homes Estate, Oniru, Victoria Island, Lagos.', NULL, '2348037181014', NULL, NULL, '1974-09-08', 'Male', 'Married', 'Law and legal', 'Lagos', 'Nigeria', 'Private', 'Individual', NULL, 'PASSPORT', 'A50488533', NULL, 'C/21/000221', 'A/20/000003', 'Oluwatobi.O@epicureinsurancebrokers.com', 'cda37f2c-ef31-4ea5-9e48-9e073227e296');

    //     $post['first_name'] = str_replace(' & ', 'AND', str_replace('&AMP;', 'AND', $post['first_name']));

    //     $sql = "SELECT client_code FROM tec_client WHERE first_name = '" . addslashes($post['first_name']) . "' OR first_name = '" . addslashes(trim($post['first_name'])) . "' OR TRIM(CONCAT(COALESCE(title, ''), ' ', COALESCE(first_name, ''), ' ', COALESCE(last_name, ''))) LIKE '%" . addslashes(trim($post['first_name'])) . "%' LIMIT 1";
    //     // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //     $db->query($sql);
    //     $client = $db->single();
    //     if ($client) {
    //         $post['client_code'] = $client->client_code;
    //     } else {
    //         $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('" . $post['username'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['first_name'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "')";
    //         $db->query($sql);
    //         try {
    //             $db->execute();
    //         } catch (PDOException $e) {
    //             echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //             exit;
    //         }
    //     }
    //     //echo json_encode(array('status' => false, 'message' => $sql)); exit;

    //     // policy
    //     // INSERT INTO `tec_policy` (`policy_code`, `client_code`, `agent_code`, `agent_prop`, `agent_code2`, `agent_prop2`, `agent_code3`, `agent_prop3`, `trans_date`, `subrisk_code`, `branch_code`, `status`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `description`, `referral`, `proposal_code`, `doc_path`, `manual_upload`) VALUES ('FSP/F/LA/000010/21', 'C/21/000222', 'A/20/000003', '100', NULL, '0', NULL, '0', '2021-05-14 00:00:00', 'S003', 'LAG/01/001', '1', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 17:08:17', 'femi.fapohunda@gmail.com', '2021-05-21 17:09:26', NULL, NULL, NULL, 'f16f2757-9f17-4fe8-b88b-2f88c8754b1d', NULL);

    //     $post['subrisk_code'] = $array_risk[$post['subrisk_name']]['subrisk_code'];
    //     //echo json_encode(array('status' => false, 'message' => $post)); exit;

    //     $sql = "SELECT policy_code FROM tec_policy WHERE policy_code = '" . addslashes($post['policy_code']) . "' LIMIT 1";
    //     // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //     $db->query($sql);
    //     $policy = $db->single();
    //     if ($policy) {
    //         $post['policy_code'] = $policy->policy_code;
    //     } else {
    //         $sql = "INSERT INTO tec_policy (`policy_code`, `client_code`, `agent_code`, `agent_prop`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on`, `modified_by`, `modified_on`) VALUES ('" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '100', '" . $post['trans_date'] . "', '" . $post['subrisk_code'] . "', 'LAG/01/001', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";
    //         //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //         $db->query($sql);
    //         try {
    //             $db->execute();
    //         } catch (PDOException $e) {
    //             echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //             exit;
    //         }
    //     }

    //     // debit
    //     // INSERT INTO `tec_policy_debit` (`debit_code`, `ref_code`, `policy_code`, `client_code`, `agent_code`, `agent_prop`, `agent_code2`, `agent_prop2`, `agent_code3`, `agent_prop3`, `bank_account`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `trans_info`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `status`, `description`, `schedule`, `referral`, `sum_insured`, `premium_rate`, `gross_premium`, `com_rate`, `vat_rate`, `other_charge`, `credit_balance`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`, `policy_detail`, `manual_upload`) VALUES ('DN/LA/000133/21', 'DN/LA/000133/21', 'FSP/F/LA/000010/21', 'C/21/000222', 'A/20/000003', '100', NULL, '0', NULL, '0', '0085284440 (Access Bank)', '1001002', '4001002', '2021-05-14 00:00:00', 'Transfer', NULL, 'S003', 'LAG/01/001', '2021-05-14 00:00:00', '2022-01-03 00:00:00', 'NEW', '1', 'Being premium for Fire and Special perils insurance cover for BARAKAT Nigeria Limited Warehouse Located at No 64,Town Planning way, Ilupeju, Lagos for one year ', '[]', NULL, 115642200.0000, 0.144, 166524.7700, 20, 7.5, 0.0000, 100000.0000, 'NGN', 1, 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 17:10:38', 'femi.fapohunda@gmail.com', '2021-05-21 17:14:05', 'femi.fapohunda@gmail.com', '2021-05-14 17:10:38', NULL, NULL);

    //     $post['subrisk_code'] = $array_risk[$post['subrisk_name']]['subrisk_code'];
    //     $post['ref_code'] = $post['debit_code'];

    //     $post['start_date'] = date('Y-m-d', strtotime($post['trans_date']));
    //     $post['end_date'] = date('Y-m-d', strtotime($post['start_date'] . ' +' . floatval($post['duration']) . ' month'));

    //     $post['com_rate'] = $post['gross_premium'] > 0 ? (round($post['commission'] / $post['gross_premium'] * 100 * 10000) / 10000) : '0';
    //     $post['vat_rate'] = $post['commission'] > 0 ? (round($post['vat'] / $post['commission'] * 100 * 10000) / 10000) : '0';

    //     $post['approved_by'] = $post['submit_by'];
    //     $post['approved_on'] = $post['submit_on'];
    //     //echo json_encode(array('status' => false, 'message' => $post)); exit;

    //     $sql = "SELECT debit_code FROM tec_policy_debit WHERE debit_code = '" . addslashes($post['debit_code']) . "' LIMIT 1";
    //     // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //     $db->query($sql);
    //     $debit = $db->single();
    //     if ($debit) {
    //         $post['debit_code'] = $debit->debit_code;
    //     } else {
    //         $sql = "INSERT INTO tec_policy_debit (`debit_code`, `ref_code`, `policy_code`, `client_code`, `agent_code`, `agent_prop`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`, `premium_rate`, `gross_premium`, `com_rate`, `vat_rate`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '100', '1001002', '4001003', '" . $post['trans_date'] . "', 'Transfer', '" . $post['subrisk_code'] . "', 'LAG/01/001', '" . $post['start_date'] . "', '" . $post['end_date'] . "', 'NEW', '" . $post['sum_insured'] . "', '" . $post['premium_rate'] . "', '" . $post['gross_premium'] . "', '" . $post['com_rate'] . "', '" . $post['vat_rate'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "', '" . $post['approved_on'] . "')";
    //         //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //         $db->query($sql);
    //         try {
    //             $db->execute();
    //         } catch (PDOException $e) {
    //             echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //             exit;
    //         }
    //     }

    //     // receipt
    //     // INSERT INTO `tec_policy_receipt` (`receipt_code`, `ref_code`, `debit_account`, `credit_account`, `gross_premium`, `trans_date`, `trans_mode`, `trans_info`, `bus_type`, `status`, `description`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`, `manual_upload`) VALUES ('R/1/000027/21', 'DN/LA/000128/21', '1010002', '4001002', 4828.0000, '2021-05-09 00:00:00', 'Transfer', '1234567', 'RCP', '1', NULL, 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', NULL);

    //     $sql = "SELECT receipt_code FROM tec_policy_receipt WHERE receipt_code = '" . addslashes($post['receipt_code']) . "' LIMIT 1";
    //     // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //     $db->query($sql);
    //     $receipt = $db->single();
    //     if ($receipt) {
    //         $post['receipt_code'] = $receipt->receipt_code;
    //     } else {
    //         $sql = "INSERT INTO tec_policy_receipt (`receipt_code`, `ref_code`, `debit_account`, `credit_account`, `gross_premium`, `trans_date`, `trans_mode`, `bus_type`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`) VALUES ('" . $post['receipt_code'] . "', '" . $post['ref_code'] . "', '1001002', '4001003', '" . $post['gross_premium'] . "', '" . $post['trans_date'] . "', 'Transfer', 'RCP', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "', '" . $post['approved_on'] . "')";
    //         //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    //         $db->query($sql);
    //         try {
    //             $db->execute();
    //         } catch (PDOException $e) {
    //             echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
    //             exit;
    //         }
    //     }

    //     echo json_encode(array('status' => true, 'data' => 'DATA SAVED'));
    //     exit;
    // }


?>
<!doctype html>

<html lang="en">

    <head>


        <meta charset="utf-8">
        <title>Securisk data migration</title>
        <style>
            .table-01 {
                border-collapse: collapse;
            }

            .table-01 th,
            .table-01 td {
                border: 1px solid #b8b8b8;
                padding: 0.5em;
            }

            .table-01 tr:nth-child(odd) {
                background-color: #f6f6f6;
            }

            .table-02 th,
            .table-02 td {
                font-size: 8pt;
            }
        </style>
    </head>

    <body>


        <div>
            <form >
                <table class="table-01" style="width: 180px; position: fixed; right: 8px; top: 4px; margin-bottom: 8px; border: 3px solid #000000; background-color: #ffffff; box-shadow: 2px 2px 2px #777777;">
                    <tr>
                        <td>Process</td>
                        <td style="width: 25px"><input type="checkbox" id="process" onclick="processload2({})"></td>
                        <td onclick="clientsTable({result: '#result'})"> Clients </td>
                    </tr>
                    <tr>
                        <td onclick="policyTable({result: '#result'})"> policy </td>
                    </tr>
                    <tr>
                        <td>Scroll</td>
                        <td><input type="checkbox" id="scroll" checked></td>
                        <td id="meta"> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="saved"></td>
                        <td id="alreadyExist"> </td>
                    </tr>
                </table>

                <table class="table-02" style="width: calc(100% - 185px); margin-bottom: 8px">

                    <tr>
                        <td colspan="2"><strong>Securisk Data Migration</strong></td>
                    </tr>
                    <tr>
                        <td>Select EXCEL file: <input id="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" onchange='scheduleupload(event,{excelfile:"#file", result: "#result"})'></td>
                        <td>Select EXCEL files only</td>
                    </tr>
                </table>

                <table id="result" class="table-01 table-02" style="width: calc(100% - 185px); margin-bottom: 8px">
                    <thead class="res_head">
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/xls.core.min.js"></script>
        <script src="js/xlsx.core.min.js"></script>
        <script src="js/ibdate.js"></script>

    </body>
            
        <script>

            var exceljson = [];
            let url = 'http://localhost/migration/securisk.php';
            let rows = [];
            // //
            let array_list = <?php echo json_encode($array_list) ?>;
            //console.log(array_list);
            let array_risk = <?php echo json_encode($array_risk) ?>;
            //console.log(array_risk)
            let array_clients = <?php echo json_encode($array_clients) ?>;
            //console.log(array_clients)
            //client table
            function clientsTable(json) {
                let counter = 1;
                let mid = "000000" + counter;
                let fields = null;
                if(exceljson.length() > 0){
                    fields = Object.keys(exceljson[0]);
                }

                //clean the table
                $(json.result).find('tr').remove();
                var clientFields = ['registered_date', 'username', 'agent_code', 'first_name', 'last_name', 'address', 'state', 'country', 'religion', 'phone', 'client_code', 'occupation', 'business', 'id_type', 'id_number', 'sector', 'submit_by', 'submit_on', 'modified_by', 'modified_on', 'username2'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    clientFields.forEach(function(v_, i_) {
                        //console.log(v_);
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) {
                        // let cod = String(Math.random());
                        counter++;
                        
                        // if(i == 0) i = 1;
                        v['username'] = 'securiskclient' + i + '@' + 'gmail.com';
                        v['last_name'] = 'NILL';
                        v['agent_code'] = 'A/20/000003';
                        v['client_code'] = 'CL/SIB/' + mid.substring(-6) + '/23';

                        // DN/LA/000133/21

                        // v['title'] = 'Mr.';
                        v['address'] = 'LAGOS';
                        v['phone'] = '345678765';
                        v['religion'] = 'CHRISTIANITY';
                        v['occupation'] = 'Businesses and financial';
                        // v['marital_status'] = 'Single';
                        v['business'] = 'Corporate';
                        v['state'] = 'LAGOS';
                        v['country'] = 'NIGERIA';
                        v['sector'] = 'private';
                        v['id_type'] = 'CAC_NUMBER';
                        v['id_number'] = '123' + i;
                        v['username2'] = "akinolaogunmodede@gmail.com";
                        v['registered_date'] = moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');

                        v['submit_by'] = 'akinolaogunmodede@gmail.com';
                        v['submit_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                        v['modified_by'] = 'akinolaogunmodede@gmail.com';
                        v['modified_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                        //
                        html = '<tr class="row">';
                        clientFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {
                        let row = {};
                        row['func'] = 'saveClient';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[clientFields[i]] = tr[i].innerText.replace(/'/g, '');

                            }

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                        // console.log(row);
                    })

                }, 2000);

            }

            //policy
            function policyTable(json) {
                $(json.result).find('tr').remove();
                let policyFields = ['client_code', 'first_name', 'policy_code', 'agent_code', 'trans_date', 'subrisk_name', 'subrisk_code', 'branch_code', 'submit_by', 'submit_on', 'modified_by', 'modified_on', ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    policyFields.forEach(function(v_, i_) {
                        //console.log(v_);
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result).append(html);
                    //first = false;
                    exceljson.forEach(function(v, i) { 
                        
                        if(v['subrisk_code'] === undefined) return;
                        v['policy_code_'] = String($.trim(v['policy_code'])).split(' ')[0];
                        v['policy_code'] = v['policy_code_'];
                        v['branch_code'] = 'LAG/01/001';
                        v['agent_code'] = 'A/20/000003';
                        v['submit_by'] = 'akinolaogunmodede@gmail.com';
                        v['submit_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                        v['modified_by'] = 'akinolaogunmodede@gmail.com';
                        v['modified_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                        //
                        html = '<tr class="row">';
                        policyFields.forEach(function(v_, i_) {
                            // html += '<td>'+ i_ +'</td>'

                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });

                    //
                    document.querySelector('#result').addEventListener('click', (event) => {
                        let row = {};
                        row['func'] = 'savepolicy';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        if (index > 0) {

                            // console.log(index);
                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[policyFields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');

                            }

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                        // console.log(row);
                    })

                }, 2000);
            }

            function createTable(json) {
                //
                let fields = null;
                let digit = "000000";
                let counter = 0;
                let codeNumber = null;
                if (exceljson.length > 0) {
                    fields = Object.keys(exceljson[0]);
                    console.log(fields);
                    // trim trailing spaces
                    let first = true;
                    $(json.result).find('tr').remove();
                    let heading = ['S/N', 'period', 'username', 'client_code', 'first_name', 'trans_date', 'policy_code', 'start_date', 'end_date', 'subrisk_code', 'risk_code', 'subrisk_name', 'company_name', 'sum_insured', 'premium_rate', 'period_ratio', 'gross_premium', 'commission', 'vat', 'submit_by'];
                    //
                    $.each(exceljson, function(i, data) {
                        counter++;
                        let mid = digit + counter;
                        codeNumber = "CL/SIB/" + mid.slice(-6) + "/23";
                        

                        let trans_date = moment(data['trans_date']).format('YYYY-MM-DD');
                        let start_date = moment(data['start_date'], 'DD-MMM-YYYY').format('YYYY-MM-DD');
                        let end_date = moment(data['end_date'], 'DD-MMM-YYYY').format('YYYY-MM-DD');
                        data["submit_by"] = "isaac@safamdigital.com";
                        data["code_number"] =  codeNumber;

                        //
                        let html = '';
                        // heading
                        if (first) {
                            html = '<tr>';
                            fields.forEach(function(v_, i_) {
                                html += '<td >' + v_ + '</td>';
                            });
                            html += '</tr>';
                            $('#result').append(html);
                            first = false;
                        }
                        //
                        html = '<tr class="row">';
                        fields.forEach(function(v_, i_) {
                            //
                            if (typeof data[v_] === 'undefined') {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + data[v_] + '</td>';
                            $('#meta').html(i);
                        });
                        html += '</tr>';
                        $(json.result).append(html);

                    });
                }

                    document.querySelector('#result').addEventListener('click', (event) => {
                      
                        let row = {};
                        row['func'] = 'savepolicy';
                        //
                        let elem = event.target.closest('tr');
                        let tr = elem.children;
                        let index = elem.rowIndex;
                        //  console.log(index);return;
                        if (index > 0) {

                            for (let i = 0; i < tr.length; i++) {
                                //console.log(tr[i].innerText);
                                row[fields[i]] = tr[i].innerText.replace(/'[^a-zA-Z0-9 _-]/g, '');
                            }

                            $.post(url, row, function(data) {
                                // console.log(row);
                                let current = $('#result').find('tr:eq(' + index + ')');
                                //     //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    // console.log(data.message);
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                        // console.log(row);
                    })

            }

            // upload file
            function scheduleupload(event, json) {
                // console.log(document.querySelector(".table-01 tr"));return;
                // console.log($(json.excelfile)[0].files[0].name);return;
                //
                reset({});
                
                let regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
                /*Checks whether the file is a valid excel file*/
                if (regex.test($(json.excelfile).val().toLowerCase())) {
                    // console.log($(json.excelfile).val().toLowerCase().indexOf('.xlsx'));return;
                    let xlsxflag = false; /*Flag for checking whether excel is .xls format or .xlsx format*/
                    if ($(json.excelfile).val().toLowerCase().indexOf(".xlsx") > 0) {
                        xlsxflag = true;
                    }
                    /*Checks whether the browser supports HTML5*/
                    if (typeof(FileReader) != "undefined") {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            let data = e.target.result;

                            /*Converts the excel data in to object*/
                            let workbook;
                            if (xlsxflag) {
                                workbook = XLSX.read(data, {
                                    type: 'binary'
                                });

                            } else {
                                workbook = XLS.read(data, {
                                    type: 'binary'
                                });
                            }
                            // console.log(workbook.Sheets['Sheet1']);
                            /*Convert the cell value to Json*/

                            if (xlsxflag) {
                                exceljson = XLSX.utils.sheet_to_json(workbook.Sheets['Sheet2']);
                                //console.log(exceljson)
                                createTable(json);
                                // console.log(exceljson);return;
                            } else {
                                exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets[workbook.SheetNames[1]]);
                            }
                            //console.log(exceljson);


                            //processLoad({});
                        }
                        if (xlsxflag) {
                            /*If excel file is .xlsx extension than creates a Array Buffer from excel*/
                            //console.log($(json.excelfile)[0]);return;
                            reader.readAsArrayBuffer($(json.excelfile)[0].files[0]);
                        } else {
                            reader.readAsBinaryString($(json.excelfile)[0].files[0]);
                        }
                    }
                    //
                    else {
                        alert("Sorry! Your browser does not support HTML5!");
                    }
                }
                //
                else {
                    alert("Please upload a valid Excel file!");
                }
                // createTable({});
                
                // scheduleTableCalc();

            }

            // processLoad
            let processLoad = (json) => {
                // table records
                let count = 0;

                $('tr.row').each(function() {

                    let row = {}
                    let tr = $(this);
                    //
                    row.row_id = tr.index();
                    row.registered_date = tr.find('td:eq(0)').html();
                    row.username = tr.find('td:eq(1)').html();
                    row.agent_code = tr.find('td:eq(2)').html();

                    let client = tr.find('td:eq(3)').html().trim().toUpperCase();
                    //row.title = (client.substr(0, 3) === 'MRS') ? 'Mrs.' : (client.substr(0, 2) === 'MR' ? 'Mr.' : '');
                    //row.first_name = (client.substr(0, 3) === 'MRS') ? client.substr(3).trim() : (client.substr(0, 2) === 'MR' ? client.substr(2).trim() : client);
                    row.first_name = client;
                    row.last_name = tr.find('td:eq(4)').html();
                    row.address = tr.find('td:eq(5)').html();
                    row.state = tr.find('td:eq(6)').html();
                    row.country = tr.find('td:eq(7)').html();
                    row.religion = tr.find('td:eq(8)').html();
                    row.phone = tr.find('td:eq(9)').html();
                    row.client_code = tr.find('td:eq(10)').html();
                    row.occupation = tr.find('td:eq(11)').html();
                    row.business = tr.find('td:eq(12)').html();
                    row.id_type = tr.find('td:eq(13)').html();
                    row.id_number = tr.find('td:eq(14)').html();
                    row.sector = tr.find('td:eq(15)').html();
                    row.submit_by = tr.find('td:eq(16)').html();
                    row.submit_on = tr.find('td:eq(17)').html();
                    row.modified_by = tr.find('td:eq(18)').html();
                    row.modified_on = tr.find('td:eq(19)').html();
                    row.username2 = tr.find('td:eq(20)').html();


                    rows.push(row);
                    count++;
                });
                dataUpload({});
            }

            let body_len = 0;
            let processload2 = (json) => {
                let heading = [];
                let body_len = 0;
                rows = [];
                let elem_heading = [...document.querySelector('#result tr').children];
                // console.log(document.querySelector('#result tr')); return;
                let body = [...document.querySelectorAll('#result tbody > .row')];
                let len = heading.length - 1;
                let counter = 0;
                elem_heading.forEach((v) => {
                    // 
                    heading.push(v.innerText);
                });
                //
                body.forEach((v) => {

                    let tr = [...v.children];
                    //
                    let row = {};
                    row['row_id'] = body_len;
                    counter = 0;
                    tr.forEach((v_) => {
                        row[heading[counter]] = v_.innerText;
                        counter++;
                    });
                    rows.push(row);
                    body_len++;
                });
                dataUpload({});
                // console.log(rows);

            }

            //

            let savedCount = 0;
            let alreadyExist = 0;
            let mytimer;
            let dataUpload = (json) => {
                // console.log(json);return;

                if (rows.length > 0) {
                    let row = rows.shift();
                    // if(row['row_id'] == 0){
                    //     dataUpload({});
                    //    // return;
                    // }
                    row.func = 'autopolicy';
                    $.post(url, row, function(data) {
                        let current = $('#result').find('tr:eq(' + row.row_id + ')');
                        //
                        if (data.status) {
                            // savedCount++;

                            document.querySelector('#saved').innerText = savedCount++;
                            current.css({
                                'background-color': '#c4ffbd'
                            });
                        } else if (data.message == 1 || data.status == false) {
                            alreadyExist++;
                            document.querySelector('#alreadyExist').innerText = alreadyExist;
                            current.css({
                                'background-color': '#bdffff'
                            });
                        }
                        // scroll
                        if ($('#scroll').prop('checked'))
                            $('html,body').animate({
                                scrollTop: current.position().top
                            }, 0.5);
                        // next
                        if ($('#process').prop('checked')) {
                            setTimeout(function() {
                                dataUpload();

                            }, 1000);
                        }
                    }, 'JSON');
                }
            }

            // reset
            let reset = (json) => {
                $('#process').prop({
                    'checked': false
                });
                $('#scroll').prop({
                    'checked': true
                });
            }

            $(function($) {

                reset({});

            });
        </script>
</html>