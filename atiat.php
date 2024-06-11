<?php

require_once 'libs/Database.php';

$db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_atiat'); 
// $db = new Database('epicuredb.mysql.database.azure.com', 'safamadmin@epicuredb', 'S@f@#012', 'brokerage_securisk');

//
//$sql = "SELECT subrisk_name FROM cod_subrisk";
$sql = "SELECT company_name FROM tec_company";
$db->query($sql);
$rows = $db->resultSet();
$array_list = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        //array_push($array_list, $val->subrisk_name);
        array_push($array_list, $val->company_name);
    }
}

//
$sql = "SELECT t1.subrisk_code, t1.subrisk_name, t1.alpha, t1.digit, t1.risk_code, t2.premium_rate FROM cod_subrisk t1 LEFT JOIN cod_risk t2 ON t1.risk_code = t2.risk_code";
$db->query($sql);
$rows = $db->resultSet();
$array_risk = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $array_risk[$val->subrisk_name] = (array) $val;
    }
}


$sqlClients = 'SELECT t1.client_code,t1.username,t1.agent_code, t1.first_name, t1.last_name, t1.middle_name, t2.agent_code from tec_client t1 LEFT JOIN tec_agent t2 ON t1.agent_code = t2.agent_code';
$db->query($sqlClients);
$rows = $db->resultSet();
// echo json_encode(array('message' => $rows));exit;
$array_clients = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $array_clients[$val->first_name] = (array) $val;
    }
}

// process
$post = filter_input_array(INPUT_POST);
//
if ($post['func'] == 'saveClient' || $post['func'] == 'autoclient') {
    // $MYSQL_DUPLICATE_CODES = array(1062, 23000);
    $sqlcheck = "SELECT client_code FROM tec_client WHERE first_name = '" . $post['first_name'] . "' LIMIT 1";
    // if(str_contains($e, '1062 Duplicate entry')) return;
    // echo json_encode(array('status' => true, 'message '=> ""));exit;
    $sql = "INSERT INTO tec_client (`username`,`agent_code`, `first_name`, `last_name`, `address`, `religion`, `phone`, `client_code` , `submit_by`, `submit_on`, `modified_by`, `modified_on`, `occupation`, `state`, `country`, `id_type`, `id_number`, `business`, `username2`, `registered_date`) VALUES ('" . $post['username'] . "', '" . $post['agent_code'] . "', '" . $post['first_name'] . "', '" . $post['last_name'] . "', '" . $post['address'] . "', '" . $post['religion'] . "', '" . $post['phone'] . "', '" . $post['client_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['occupation'] . "', '" . $post['state'] . "', '" . $post['country'] . "' , '" . $post['id_type'] . "', '" . $post['id_number'] . "' , '" . $post['business'] . "', '" . $post['username2'] . "', '" . $post['registered_date'] . "' )";
    // $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('" . $post['username'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['first_name'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "')";

    try {
        $db->query($sqlcheck);
        //  echo json_encode(array('message' => $db->execute()));exit;
        $v = $db->single();
        //  echo json_encode(array('message' => $v));exit;
        if ($v->client_code) {
            echo json_encode(array('status' => false, 'message ' => $v));
            exit;
        } else {
            $db->query($sql);
            $res = $db->rowCount();
            //   echo json_encode($res);exit;
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        }
    } catch (PDOException $e) {
        echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        exit;
    }
}
//
if ($post['func'] == 'savepolicy' || $post['func'] == 'autopolicy') {
    // echo json_encode(array('message' => $post));exit;
    // $MYSQL_DUPLICATE_CODES = array(1062, 23000);
    $sqlcheck = "SELECT policy_code FROM tec_policy WHERE policy_code = '" . $post['policy_code'] . "' LIMIT 1";
    // if(str_contains($e, '1062 Duplicate entry')) return;
    // echo json_encode(array('status' => true, 'message '=> ""));exit;
    $sql = "INSERT INTO tec_policy (`client_code`,`policy_code`, `agent_code`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on` , `modified_by`, `modified_on`) VALUES ('" . $post['client_code'] . "', '" . $post['policy_code'] . "', '" . $post['agent_code'] . "', '" . $post['trans_date'] . "', '" . $post['subrisk_code'] . "', '" . $post['branch_code'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";


    try {
        $db->query($sqlcheck);
          //echo json_encode(array('message' => $v));exit;
        // $db->execute();
        $v = $db->single();
        //  echo json_encode(array('message' => $v));exit;
        if ($v->client_code) {
            echo json_encode(array('status' => false, 'message ' => $v));
            exit;
        } else {
            $db->query($sql);
            $res = $db->rowCount();
            //    echo json_encode($res);exit;
            if ($res > 0) {
                echo json_encode(array('status' => true, 'message ' => $res, 'msg' => $post));
                exit;
            } else {

                echo json_encode(array('status' => false, 'message ' => $res, 'msg' => $post));
                exit;
            }
        }
    } catch (PDOException $e) {
        echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
        exit;
    }
}

if ($post['func'] == 'process') {
    // client exists
    // INSERT INTO `tec_client` (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `last_name`, `middle_name`, `title`, `religion`, `address`, `town`, `phone`, `email2`, `phone2`, `birth_date`, `gender`, `marital_status`, `occupation`, `state`, `country`, `sector`, `business`, `bvn_number`, `id_type`, `id_number`, `picture`, `client_code`, `agent_code`, `username2`, `doc_path`) VALUES ('kidudu@me.com', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', NULL, NULL, 0, '2021-04-20 10:39:16', '2021-04-20 10:39:18', '2021-04-20 10:39:22', NULL, NULL, NULL, '1', NULL, 'echezona.i@epicureinsurancebrokers.com', '2021-04-20 10:39:18', NULL, '2021-04-20 10:39:22', 'OGHENAKPOBO', 'IDUDU', NULL, 'Mr.', 'Christianity', 'C5 Millenium Homes Estate, Oniru, Victoria Island, Lagos.', NULL, '2348037181014', NULL, NULL, '1974-09-08', 'Male', 'Married', 'Law and legal', 'Lagos', 'Nigeria', 'Private', 'Individual', NULL, 'PASSPORT', 'A50488533', NULL, 'C/21/000221', 'A/20/000003', 'Oluwatobi.O@epicureinsurancebrokers.com', 'cda37f2c-ef31-4ea5-9e48-9e073227e296');

    $post['first_name'] = str_replace(' & ', 'AND', str_replace('&AMP;', 'AND', $post['first_name']));

    $sql = "SELECT client_code FROM tec_client WHERE first_name = '" . addslashes($post['first_name']) . "' OR first_name = '" . addslashes(trim($post['first_name'])) . "' OR TRIM(CONCAT(COALESCE(title, ''), ' ', COALESCE(first_name, ''), ' ', COALESCE(last_name, ''))) LIKE '%" . addslashes(trim($post['first_name'])) . "%' LIMIT 1";
    // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $client = $db->single();
    if ($client) {
        $post['client_code'] = $client->client_code;
    } else {
        $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('" . $post['username'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['first_name'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "')";
        $db->query($sql);
        try {
            $db->execute();
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;

    // policy
    // INSERT INTO `tec_policy` (`policy_code`, `client_code`, `agent_code`, `agent_prop`, `agent_code2`, `agent_prop2`, `agent_code3`, `agent_prop3`, `trans_date`, `subrisk_code`, `branch_code`, `status`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `description`, `referral`, `proposal_code`, `doc_path`, `manual_upload`) VALUES ('FSP/F/LA/000010/21', 'C/21/000222', 'A/20/000003', '100', NULL, '0', NULL, '0', '2021-05-14 00:00:00', 'S003', 'LAG/01/001', '1', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 17:08:17', 'femi.fapohunda@gmail.com', '2021-05-21 17:09:26', NULL, NULL, NULL, 'f16f2757-9f17-4fe8-b88b-2f88c8754b1d', NULL);

    $post['subrisk_code'] = $array_risk[$post['subrisk_name']]['subrisk_code'];
    //echo json_encode(array('status' => false, 'message' => $post)); exit;

    $sql = "SELECT policy_code FROM tec_policy WHERE policy_code = '" . addslashes($post['policy_code']) . "' LIMIT 1";
    // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $policy = $db->single();
    if ($policy) {
        $post['policy_code'] = $policy->policy_code;
    } else {
        $sql = "INSERT INTO tec_policy (`policy_code`, `client_code`, `agent_code`, `agent_prop`, `trans_date`, `subrisk_code`, `branch_code`, `submit_by`, `submit_on`, `modified_by`, `modified_on`) VALUES ('" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '100', '" . $post['trans_date'] . "', '" . $post['subrisk_code'] . "', 'LAG/01/001', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "')";
        //echo json_encode(array('status' => false, 'message' => $sql)); exit;
        $db->query($sql);
        try {
            $db->execute();
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    // debit
    // INSERT INTO `tec_policy_debit` (`debit_code`, `ref_code`, `policy_code`, `client_code`, `agent_code`, `agent_prop`, `agent_code2`, `agent_prop2`, `agent_code3`, `agent_prop3`, `bank_account`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `trans_info`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `status`, `description`, `schedule`, `referral`, `sum_insured`, `premium_rate`, `gross_premium`, `com_rate`, `vat_rate`, `other_charge`, `credit_balance`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`, `policy_detail`, `manual_upload`) VALUES ('DN/LA/000133/21', 'DN/LA/000133/21', 'FSP/F/LA/000010/21', 'C/21/000222', 'A/20/000003', '100', NULL, '0', NULL, '0', '0085284440 (Access Bank)', '1001002', '4001002', '2021-05-14 00:00:00', 'Transfer', NULL, 'S003', 'LAG/01/001', '2021-05-14 00:00:00', '2022-01-03 00:00:00', 'NEW', '1', 'Being premium for Fire and Special perils insurance cover for BARAKAT Nigeria Limited Warehouse Located at No 64,Town Planning way, Ilupeju, Lagos for one year ', '[]', NULL, 115642200.0000, 0.144, 166524.7700, 20, 7.5, 0.0000, 100000.0000, 'NGN', 1, 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 17:10:38', 'femi.fapohunda@gmail.com', '2021-05-21 17:14:05', 'femi.fapohunda@gmail.com', '2021-05-14 17:10:38', NULL, NULL);

    $post['subrisk_code'] = $array_risk[$post['subrisk_name']]['subrisk_code'];
    $post['ref_code'] = $post['debit_code'];

    $post['start_date'] = date('Y-m-d', strtotime($post['trans_date']));
    $post['end_date'] = date('Y-m-d', strtotime($post['start_date'] . ' +' . floatval($post['duration']) . ' month'));

    $post['com_rate'] = $post['gross_premium'] > 0 ? (round($post['commission'] / $post['gross_premium'] * 100 * 10000) / 10000) : '0';
    $post['vat_rate'] = $post['commission'] > 0 ? (round($post['vat'] / $post['commission'] * 100 * 10000) / 10000) : '0';

    $post['approved_by'] = $post['submit_by'];
    $post['approved_on'] = $post['submit_on'];
    //echo json_encode(array('status' => false, 'message' => $post)); exit;

    $sql = "SELECT debit_code FROM tec_policy_debit WHERE debit_code = '" . addslashes($post['debit_code']) . "' LIMIT 1";
    // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $debit = $db->single();
    if ($debit) {
        $post['debit_code'] = $debit->debit_code;
    } else {
        $sql = "INSERT INTO tec_policy_debit (`debit_code`, `ref_code`, `policy_code`, `client_code`, `agent_code`, `agent_prop`, `debit_account`, `credit_account`, `trans_date`, `trans_mode`, `subrisk_code`, `branch_code`, `start_date`, `end_date`, `bus_type`, `sum_insured`, `premium_rate`, `gross_premium`, `com_rate`, `vat_rate`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`) VALUES ('" . $post['debit_code'] . "', '" . $post['ref_code'] . "', '" . $post['policy_code'] . "', '" . $post['client_code'] . "', '" . $post['agent_code'] . "', '100', '1001002', '4001003', '" . $post['trans_date'] . "', 'Transfer', '" . $post['subrisk_code'] . "', 'LAG/01/001', '" . $post['start_date'] . "', '" . $post['end_date'] . "', 'NEW', '" . $post['sum_insured'] . "', '" . $post['premium_rate'] . "', '" . $post['gross_premium'] . "', '" . $post['com_rate'] . "', '" . $post['vat_rate'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "', '" . $post['approved_on'] . "')";
        //echo json_encode(array('status' => false, 'message' => $sql)); exit;
        $db->query($sql);
        try {
            $db->execute();
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    // receipt
    // INSERT INTO `tec_policy_receipt` (`receipt_code`, `ref_code`, `debit_account`, `credit_account`, `gross_premium`, `trans_date`, `trans_mode`, `trans_info`, `bus_type`, `status`, `description`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`, `manual_upload`) VALUES ('R/1/000027/21', 'DN/LA/000128/21', '1010002', '4001002', 4828.0000, '2021-05-09 00:00:00', 'Transfer', '1234567', 'RCP', '1', NULL, 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', 'Sarah.e@epicureinsurancebrokers.com', '2021-05-14 13:30:06', NULL);

    $sql = "SELECT receipt_code FROM tec_policy_receipt WHERE receipt_code = '" . addslashes($post['receipt_code']) . "' LIMIT 1";
    // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $receipt = $db->single();
    if ($receipt) {
        $post['receipt_code'] = $receipt->receipt_code;
    } else {
        $sql = "INSERT INTO tec_policy_receipt (`receipt_code`, `ref_code`, `debit_account`, `credit_account`, `gross_premium`, `trans_date`, `trans_mode`, `bus_type`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `approved_by`, `approved_on`) VALUES ('" . $post['receipt_code'] . "', '" . $post['ref_code'] . "', '1001002', '4001003', '" . $post['gross_premium'] . "', '" . $post['trans_date'] . "', 'Transfer', 'RCP', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['modified_by'] . "', '" . $post['modified_on'] . "', '" . $post['approved_by'] . "', '" . $post['approved_on'] . "')";
        //echo json_encode(array('status' => false, 'message' => $sql)); exit;
        $db->query($sql);
        try {
            $db->execute();
        } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )'));
            exit;
        }
    }

    echo json_encode(array('status' => true, 'data' => 'DATA SAVED'));
    exit;
}


//  function sqlQuery($arg = array())
// {

//     //return gettype($arg['array'][0]);
//     //
//     if (!is_array($arg['array'])) return "Data not specified";
//     //
//     else if (!is_object($arg['array'][0])) return "Data[0] not Object";
//     //
//     else if (!in_array($arg['action'], array('INSERT', 'UPDATE'))) return "Insert/update not specified";
//     //
//     else if (!is_array($arg['fields'])) return "Fields not specified";
//     //
//     else if (!is_string($arg['table'])) return "Database table not specified";

//     //
//     if (strtoupper($arg['action']) == 'INSERT') {
//         $insert = $values = "";
//         foreach ($arg['fields'] as $key) {
//             $insert .= ", `" . $key . "`";
//         }

//         //
//         $values = "";
//         foreach ($arg['array'] as $val) {
//             if (is_object($val)) {
//                 $value = "";
//                 foreach ($arg['fields'] as $key) {
//                     $value .= ", '" . addslashes($val->{$key} ?? '') . "'";
//                 }
//                 $values .= ", (" . substr($value, 2) . ")";
//             }
//         }

//         // additional
//         if ($arg['option'] == 'ADD')
//             $sql = ", " . str_ireplace('\'NULL\'', "NULL", substr($values ?? '', 2));
//         else
//             $sql = "INSERT INTO " . $arg['table'] . " (" . substr($insert, 2) . ") VALUES " . str_ireplace('\'NULL\'', "NULL", substr($values, 2));
//     } //
//     else if (strtoupper($arg['action']) == 'UPDATE') {
//         $update = "";
//         foreach ($arg['fields'] as $key) {
//             $update .= ", `" . $key . "` = '" . addslashes($arg['array'][0]->{$key} ?? '') . "'";
//         }

//         $sql = "UPDATE " . $arg['table'] . " SET " . str_ireplace('\'NULL\'', "NULL", substr($update, 2));
//         if (!empty($arg['option']))
//             $sql .= " " . $arg['option'];
//     } //
//     else {
//         $sql = "Unknown error";
//     }

//     return str_ireplace('\'\'', "NULL", str_ireplace('\\\\', '\\', str_ireplace('\\\\', '\\', str_ireplace('\"', '\'', str_ireplace('\'', '\"', $sql)))));
// }

?>
<!doctype html>

<html lang="en">

<head>


    <meta charset="utf-8">
    <title>Epicure data migration</title>
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
    <div id="head3">

    </div>
    <div id="head">
        <h1>heading 1</h1>
        <h4>heading</h4>
    </div>

    <form>
        <table class="table-01" style="width: 180px; position: fixed; right: calc(100% - 1100px); top: 4px; margin-bottom: 8px; border: 3px solid #000000; background-color: #ffffff; box-shadow: 2px 2px 2px #777777;">
            <tr>
                <td>Process</td>
                <td style="width: 25px"><input type="checkbox" id="process" onclick="processLoad2({})"></td>
                <td onclick="clientsTable({result: '#result'})"> Clients </td>
            </tr>
            <tr>
                <td onclick="policyTable({result: '#result'})"> policy </td>
                <td><label onclick="playAction()">test</label></td>
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

        <table class="table-01" style="width: calc(100% - 185px); margin-bottom: 8px">

            <tr>
                <td colspan="2"><strong>Securisk Data Migration</strong></td>
            </tr>
            <tr>
                <td>Select EXCEL file: <input id="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" onChange="scheduleUpload({excelfile:'#file', result: '#result'})"></td>
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
        <table id="scared" class="scared">
            <tbody>
                <tr>
                    <td><input type="checkbox" id="a" name="a" value="idowu"></td>
                    <td>isaac</td>
                    <td>segun</td>
                    <td>23</td>
                    <td>developer</td>
                    <td>lagos</td>
                    <td>Nigeria</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="a" name="a" value="femi"></td>
                    <td>isaac</td>
                    <td>segun</td>
                    <td>23</td>
                    <td>developer</td>
                    <td>lagos</td>
                    <td>Nigeria</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="a" name="a" value="isaac"></td>
                    <td>isaac</td>
                    <td>segun</td>
                    <td>23</td>
                    <td>developer</td>
                    <td>lagos</td>
                    <td>Nigeria</td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="a" name="a" value="isaac"></td>
                    <td>isaac</td>
                    <td>segun</td>
                    <td>23</td>
                    <td>developer</td>
                    <td>lagos</td>
                    <td>Nigeria</td>
                </tr>

            </tbody>
       
            
    </table>

    <div id="seg" class="scared">
            
        <h2>hello</h2>
        <p>what is going on here</p>
    </div>
       
            
    </table>
    </form>



    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/xls.core.min.js"></script>
    <script src="js/xlsx.core.min.js"></script>
    <script src="js/ibdate.js"></script>

    <script>
        //console.log(parseFloat(''));
        //console.log($("div#head").html());
        // let v = 56;
        // let tr = '<tr '+ (  (v === 5 )  ? "femi" : "scared" )+' > <td> '+(v)+' </td></tr>';
        //console.log(tr);
        // function f (){

        // }
        // const msg = {
        //     name: " segun",
        //     text: document.querySelector("div#head").innerHTML,
        //     value: 5 * 5
        // }
       // console.log(msg)

        var exceljson = [];
        let url = 'http://localhost/migration/atiat.php';
        let rows = [];
        //
        let array_list = <?php echo json_encode($array_list) ?>;
        //console.log(array_list);
        let array_risk = <?php echo json_encode($array_risk) ?>;
        let array_clients = <?php echo json_encode($array_clients) ?>;
        //client table
        function clientsTable(json) {
            let counter = 1;

            //
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
                    let cod = String(Math.random());
                    
                    // if(i == 0) i = 1;
                    v['username'] =  v["username"] ?? 'atiatclient' + i + '@' + 'gmail.com';
                    v['last_name'] = v["last_name"] ?? 'NILL';
                    v['agent_code'] = 'A/20/000003';
                    v['client_code'] = 'CL/AIB/2' + '0' + cod.substring(cod.length - 2) + '/' + counter++;

                    // DN/LA/000133/21

                    // v['title'] = 'Mr.';
                    v['address'] = 'LAGOS';
                    v['phone'] = '345678765';
                    v['religion'] = 'CHRISTIANITY';
                    v['occupation'] = 'Management';
                    // v['marital_status'] = 'Single';
                    v['business'] = 'Corporate';
                    v['state'] = 'LAGOS';
                    v['country'] = 'NIGERIA';
                    v['sector'] = 'private';
                    v['id_type'] = 'CAC_NUMBER';
                    v['id_number'] = '123' + i;
                    v['username2'] =  v["username"] ?? 'atiatclient' + i + '@' + 'gmail.com';
                    v['registered_date'] = moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');

                    v['submit_by'] = 'Sunday.Uteh@atiatinsurancebrokers.com';
                    v['submit_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                    v['modified_by'] = 'Sunday.Uteh@atiatinsurancebrokers.com';
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
                // console.log(document.querySelectorAll("#result"));
                // console.log($("#result"));

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

        function playAction(){
            let m = document.querySelectorAll(".scared");
           //let m = $("#scared");
            console.log(m[1]);
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
                    // v['policy_code_'] = String($.trim(v['policy_code'])).split(' ')[0];
                    v["trans_date"] = moment(v["trans_date"], "DD/MM/YYYY").format("YYYY-MM-DD")
                    v['policy_code_'] = $.trim(v['policy_code']);
                    v['policy_code'] = v['policy_code_'];
                    v["client_code"] = array_clients[v["first_name"]]["client_code"]
                    v["subrisk_code"] = array_risk[v["subrisk_name"]]["subrisk_code"]
                    v['branch_code'] = 'LAG/01/001';
                    v['agent_code'] = 'A/20/000003';
                    v['submit_by'] = 'Sunday.Uteh@atiatinsurancebrokers.com';
                    v['submit_on'] = moment().format('YYYY-MM-DD hh:mm:ss');
                    v['modified_by'] = 'Sunday.Uteh@atiatinsurancebrokers.com';
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
                            row[policyFields[i]] = tr[i].innerText.replace(/'/g, '');

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
            // var dateDiff = null;
            //
            if (exceljson.length > 0) {

                // trim trailing spaces
                let first = true;
                $(json.result).find('tr').remove();
                let heading = ['period', 'username', 'client_code', 'first_name', 'trans_date', 'policy_code', 'start_date', 'end_date', 'subrisk_code', 'risk_code', 'subrisk_name', 'company_name', 'sum_insured', 'premium_rate', 'period_ratio', 'gross_premium', 'commission', 'vat', 'submit_by'];
                //
                $.each(exceljson, function(i, v) {
                    
                    if(!moment(v['trans_date']).isValid()) return;
                    let trans_date = moment(v['trans_date'], 'DD-MMM-YYYY').format('YYYY-MM-DD');
                    // console.log(trans_date);
                    // return;
                    let start_date = moment(v['start_date'], 'DD-MMM-YYYY').format('YYYY-MM-DD');
                    let end_date = moment(v['end_date'], 'DD-MMM-YYYY').format('YYYY-MM-DD');
                    v['trans_date'] = trans_date;
                    v['end_date'] = end_date;
                    v['start_date'] = start_date;
                    
                    // console.log(ValidTransDate);
                    // if (!validstartDate) {
                    //     start_date = trans_date;

                    // } else {
                    //     start_date = v['start_date'];

                    // }
                    // let ValidEndDate = dateDiff.check(v['end_date']);
                    // if (!ValidEndDate) {

                    //     end_date = moment(v['start_date']).add(1, 'year').subtract(1, 'day');

                    // } else {
                    //     end_date = v['end_date'];

                    // }

                    // console.log(validstartDate);
                    // let swapstart_date = dateDiff.datevalidity(start_date);
                    // let swapend_date = dateDiff.datevalidity(end_date);
                    // let swaptrans_date = dateDiff.datevalidity(trans_date);
                    // // console.log(myv);
                    // // return;

                    // v['trans_date'] = moment(swaptrans_date, 'MM/DD/YYYY').format('YYYY-MM-DD');
                    // v['start_date'] = moment(swapstart_date, 'MM/DD/YYYY').format('YYYY-MM-DD');
                    // v['end_date'] = moment(swapend_date, 'MM/DD/YYYY').format('YYYY-MM-DD');
                    //  console.log(trans_date, start_date, end_date, v['trans_date'], v['start_date'], v['end_date']);
                    //  return;
                    // subrisk
                    if (array_risk[$.trim(v['subrisk_name']) ?? ''] !== undefined)
                        v['subrisk_code'] = array_risk[$.trim(v['subrisk_name'])]['subrisk_code'];
                    //RISK CODE
                    if (array_risk[$.trim(v['subrisk_name']) ?? ''] !== undefined)
                        v['risk_code'] = array_risk[$.trim(v['subrisk_name'])]['risk_code'];
                    //client code
                    if (array_clients[$.trim(v['first_name']) ?? ''] !== undefined) 
                        v['client_code'] = array_clients[$.trim(v['first_name'])]['client_code'];
                    //
                    if (array_clients[$.trim(v['first_name']) ?? ''] !== undefined) {
                        v['username'] = array_clients[$.trim(v['first_name'])]['username'];
                    }
                    // v['submit_by'] = 'isaac@safamdigital.com';
                    //
                    let prem_rate = parseFloat(v['premium_rate'] ?? 0);
                    // let prem_rate = prem_val / 100;
                    if (isNaN(prem_rate)) {
                        prem_rate = 0;
                    }

                    let sum_insured = parseFloat('0' + $.trim(v['sum_insured']).replace(/[^\d.]/g, ''));
                    if (isNaN(sum_insured)) {
                        sum_insured = 0;
                    }
                    //
                    let period_default = moment(v['start_date']).add(1, 'year').diff(v['start_date'], 'day');
                    let period_prorate = Math.abs(moment(v['end_date']).diff(v['start_date'], 'day'));
                    let period_ratio = period_prorate / period_default;
                    //
                    let gross_premium = sum_insured * prem_rate * period_ratio;
                    // prem_rate = gross_premium / sum_insured * period_ratio;
                    v['gross_premium'] = v["gross_premium"] ?? gross_premium.toFixed(2);
                    v['sum_insured'] = sum_insured.toFixed(2);
                    v['premium_rate'] = prem_rate.toFixed(2);
                    let str = String(period_ratio.toPrecision(4));
                    v['period_ratio'] = str.replace(/[^\d.]/g, '');
                    //
                    let comm = gross_premium * 0.125;
                    v['commission'] = comm.toFixed(2);
                    let vat = comm * 0.075;
                    v['vat'] = vat.toFixed(2);

                    // let period = dateDiff.date_diff(v['start_date'], v['end_date']);
                    let period = moment(v['start_date']).add(1, 'year').diff(v['start_date'], 'day');
                    // console.log(period); return;
                    v['period'] = period_prorate;

                    //
                    // if (v['subrisk_name'] === undefined || v['subrisk_name'] === '') return;
                    // if (v['subrisk_name'] === 'CRITICAL ILLNESS INSURANCE' && v['first_name'] !== 'HYGIA HMO') return;

                    // if (v['premium_rate'] === undefined || v['premium_rate'] === '') v['premium_rate'] = '0';
                    // if (v['first_name'] === 'HYGIA HMO') {
                    //     v['premium_rate'] = '0.6';
                    //     v['sum_insured'] = '0';
                    // }
                    // let premium_rate = parseFloat('0' + v['premium_rate'].replace(/[^\d.]/g, ''));
                    // if (premium_rate === 0) premium_rate = array_risk[v['subrisk_name']]['premium_rate'];
                    // v['premium_rate'] = premium_rate.toString();

                    // if (v['subrisk_name'] === 'THIRD PARTY PRIVATE MOTOR') v['sum_insured'] = '1000000';
                    // if (v['sum_insured'] === undefined || v['sum_insured'] === '') v['sum_insured'] = '0';
                    // let sum_insured = parseFloat('0' + v['sum_insured'].replace(/[^\d.]/g, ''));
                    // if (sum_insured === 0) {
                    //     v['sum_insured'] = Math.round(gross_premium * 100 / premium_rate * 100) / 100;
                    // } else {
                    //     v['premium_rate'] = Math.round(gross_premium / sum_insured * 100 * 10000) / 10000;
                    // }

                    // FSP/F/LA/000010/21
                    //console.log(v['subrisk_name']);
                    // v['policy_code'] = array_risk[v['subrisk_name']]['alpha'] + '/' + array_risk[v['subrisk_name']]['risk_code'] + '/LA/1' + ('00000' + v['upload_id']).substr(-5) + '/20';

                    // DN/LA/000133/21
                    // v['debit_code'] = 'DN/LA/1' + ('00000' + v['upload_id']).substr(-5) + '/20';

                    // R/1/000027/21
                    // v['receipt_code'] = 'R/1/1' + ('00000' + v['upload_id']).substr(-5) + '/20';

                    //
                    let html = '';
                    // heading
                    if (first) {
                        html = '<tr>';
                        heading.forEach(function(v_, i_) {
                            html += '<td>' + v_ + '</td>';
                        });
                        html += '</tr>';
                        // let el = document.querySelector('.res_head');
                        // el.append(html);
                        $('#result').append(html);
                        first = false;
                    }
                    //
                    html = '<tr class="row">';
                    //html = '<tr class="row" style="' + (array_list.includes(v['Type of Cover']) ? '' : 'background-color: #ffd3d3') + '">';
                    //html = '<tr class="row" style="' + (array_list.includes(v['Insurance Company']) ? '' : 'background-color: #ffd3d3') + '">';
                    heading.forEach(function(v_, i_) {
                        // console.log(v[v]);
                        //
                        if (typeof v[v_] === 'undefined') {

                            html += '<td></td>';
                            return;
                        }
                        html += '<td>' + v[v_] + '</td>';
                        $('#meta').html(i);
                    });
                    html += '</tr>';
                    $(json.result).append(html);

                });
            }

        }

        // upload file
        let scheduleUpload = (json) => {
            //
            //reset({});
            //
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

                        /*Convert the cell value to Json*/

                        if (xlsxflag) {
                            exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[workbook.SheetNames[1]]);
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
            //
            //scheduleTableCalc();

        }

        // processLoad
        let processLoad = (json) => {
            // table records
            let count = 0;

            $('tr.row').each(function(i, v) {
                //console.log(i, v);return;
                let row = {}
                let tr = $(this);
                //console.log(tr.index());return;
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
        let processLoad2 = (json) => {
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
                row.func = 'autoclient';
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
</body>

</html>