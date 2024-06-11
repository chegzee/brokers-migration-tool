<?php

set_time_limit(300); // default 30 seconds

require_once 'libs/Database.php';

//$db = new Database('localhost', 'ims', 'ims', 'ims'); // localhost
$db = new Database('ims.mutualng.com', 'azure_vm', 'Mutual@123456', 'ims'); // production

//
$sql = "SELECT branch_id, branch_asset, branch_name FROM cod_branches";
$db->query($sql);
$rows = $db->resultSet();
$branches = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $branches[$val->branch_id] = (array)$val;
    }
}

//
$sql = "SELECT account_code, account_name FROM act_account";
$db->query($sql);
$rows = $db->resultSet();
$account = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $account[$val->account_code] = (array)$val;
    }
}

//
$sql = "SELECT sr.subrisk_code, sr.subrisk_name, cr.risk_name, cr.tc FROM cod_subrisk sr LEFT JOIN cod_risk cr ON sr.risk_code = cr.risk_code";
$db->query($sql);
$rows = $db->resultSet();
$glcode = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $glcode[$val->subrisk_code] = (array)$val;
    }
}

// process
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if ($post['func'] == 'load') {
    //
    $sql =
        "SELECT dn1_.dncn_no, dn1_.ref_no, dn1_.policy_no, dn1_.branch_id, dn1_.subrisk_code, dn1_.gross_premium, dn1_.commission, dn1_.trans_date, dn1_.trans_type, dn1_.option_type, dn1_.insured_code, dn1_.insured_name, dn1_.party_code, dn1_.party_name, dn1_.currency_code, dn1_.currency_rate, dn1_.invoice_id, dn1_.trans_detail, dn1_.trans_code, dn1_.submit_by, dn1_.submit_on, dn1_.approve_by, dn1_.approve_on, dn1_.account_code, dn1_.account_name, gl1_.voucher_no FROM ( " .
        "SELECT DISTINCT if(dn1.trans_type LIKE '%N', dn1.dncn_no, dn1.receipt_no) dncn_no, dn1.ref_no, dn1.policy_no, dn1.branch_id, dn1.subrisk_code, dn1.gross_premium, dn1.commission, dn1.trans_date, dn1.trans_type, dn1.option_type, dn1.insured_code, dn1.insured_name, dn1.party_code, dn1.party_name, dn1.currency_code, dn1.currency_rate, dn1.trans_guid invoice_id, COALESCE(dn1.trans_detail, dn1.naration) trans_detail, dn1.trans_code, dn1.submit_by, dn1.submit_on, COALESCE(dn1.approve_by, dn1.submit_by) approve_by, COALESCE(dn1.approve_on, dn1.submit_on) approve_on, dn1.account_code, dn1.account_name FROM und_dncn dn1 WHERE YEAR(dn1.trans_date) = '" . $post['year'] . "' AND MONTH(dn1.trans_date) = '" . $post['month'] . "' " .
        ") dn1_ LEFT JOIN ( " .
        "SELECT DISTINCT gl1.voucher_no, gl1.ref_no FROM act_gledger gl1 WHERE YEAR(gl1.trans_date) = '" . $post['year'] . "' AND MONTH(gl1.trans_date) = '" . $post['month'] . "' " .
        ") gl1_ ON gl1_.voucher_no = dn1_.dncn_no " .
        "HAVING voucher_no IS NULL ";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    $db->query($sql);
    $rows = $db->resultSet();
    
    echo json_encode(array('status' => true, 'data' => $rows));
    exit;
}

if ($post['func'] == 'process') {
    // exists
    $sql = "SELECT 1 FROM act_gledger WHERE voucher_no = '" . $post['dncn_no'] . "' AND voucher_type = '" . $post['trans_type'] . "' LIMIT 1";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    $db->query($sql);
    if ($db->rowCount() > 0) {
        echo json_encode(array('status' => false, 'message' => 'VOUCHER EXISTS')); exit;
    }
    
    //
    $gl = $post;
    
    //
    $sql = "SELECT account, description, description1 FROM act_setup WHERE account LIKE 'TC_" . $post['branch_id'] . "' LIMIT 1";
    $db->query($sql);
    $row = $db->single();
    //
    $description = explode(':', $row->description);
    $description1 = explode(':', $row->description1);
    
    // party
    $sql = "SELECT party_type FROM cod_party LIMIT 1";
    $db->query($sql);
    $row = $db->single();
    $party = (array) $row;
    
    //
    $gl['voucher_no'] = $post['dncn_no'];
    $gl['voucher_type'] = $post['trans_type'];
    $gl['beneficiary'] = $post['party_name'];
    $gl['cheque_detail'] = $post['trans_detail'];
    $gl['party_type'] = $party['party_type'];
    
    //
    if ($post['trans_type'] === 'DN') {
        
        // debit
        $gl['account_code'] = $description[1];
        $gl['account_name'] = $description1[1];
        $gl['debit'] = $post['gross_premium'];
        $gl['credit'] = 0;
        //
        $sql = "INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `trans_code`, `beneficiary`, `policy_no`, `cheque_detail`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `approve_by`, `approve_on`, `insured_code`, `insured_name`, `party_code`, `party_name`, `party_type`) VALUES ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // credit
        $gl['account_code'] = $description[$glcode[$post['subrisk_code']]['tc']];
        $gl['account_name'] = $description1[$glcode[$post['subrisk_code']]['tc']];
        $gl['debit'] = 0;
        $gl['credit'] = $post['gross_premium'];
        //
        $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // commission
        
        if ($post['commission'] > 0) {
    
            // debit
            $gl['account_code'] = $description[$glcode[$post['subrisk_code']]['tc'] + 20];
            $gl['account_name'] = $description1[$glcode[$post['subrisk_code']]['tc'] + 20];
            $gl['debit'] = $post['commission'];
            $gl['credit'] = 0;
            //
            $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
    
            // credit
            $gl['account_code'] = $description[1 + 20];
            $gl['account_name'] = $description1[1 + 20];
            $gl['debit'] = 0;
            $gl['credit'] = $post['commission'];
            //
            $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
            
        }
    }
    //  && $post['option_type'] !== 'FAC-OUT'
    else if ($post['trans_type'] === 'CN') {
        
        // debit
        $gl['account_code'] = $description[$glcode[$post['subrisk_code']]['tc']];
        $gl['account_name'] = $description1[$glcode[$post['subrisk_code']]['tc']];
        $gl['debit'] = $post['gross_premium'];
        $gl['credit'] = 0;
        //
        $sql = "INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `trans_code`, `beneficiary`, `policy_no`, `cheque_detail`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `approve_by`, `approve_on`, `insured_code`, `insured_name`, `party_code`, `party_name`, `party_type`) VALUES ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // credit
        $gl['account_code'] = $description[1];
        $gl['account_name'] = $description1[1];
        $gl['debit'] = 0;
        $gl['credit'] = $post['gross_premium'];
        //
        $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // commission
        
        if ($post['commission'] > 0) {
    
            // debit
            $gl['account_code'] = $description[1 + 20];
            $gl['account_name'] = $description1[1 + 20];
            $gl['debit'] = $post['commission'];
            $gl['credit'] = 0;
            //
            $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
    
            // credit
            $gl['account_code'] = $description[$glcode[$post['subrisk_code']]['tc'] + 20];
            $gl['account_name'] = $description1[$glcode[$post['subrisk_code']]['tc'] + 20];
            $gl['debit'] = 0;
            $gl['credit'] = $post['commission'];
            //
            $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
            
        }
    }
    //
    else if ($post['trans_type'] === 'RCP') {
        
        // debit
        $gl['account_code'] = $post['account_code'];
        $gl['account_name'] = $post['account_name'];
        $gl['debit'] = $post['gross_premium'];
        $gl['credit'] = 0;
        //
        $sql = "INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `trans_code`, `beneficiary`, `policy_no`, `cheque_detail`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `approve_by`, `approve_on`, `insured_code`, `insured_name`, `party_code`, `party_name`, `party_type`) VALUES ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // credit
        $gl['account_code'] = $description[1];
        $gl['account_name'] = $description1[1];
        $gl['debit'] = 0;
        $gl['credit'] = $post['gross_premium'];
        //
        $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
    }
    //
    else if ($post['trans_type'] === 'PYM' || $post['trans_type'] === 'PYM2' || $post['trans_type'] === 'RCP2') {
        
        // debit
        $gl['account_code'] = $post['trans_type'] === 'RCP2' ? '43148' : $description[1 + 20];
        $gl['account_name'] = $post['trans_type'] === 'RCP2' ? 'Sterling Bank Plc - 114' : $description1[1 + 20];
        $gl['debit'] = $post['commission'];
        $gl['credit'] = 0;
        //
        $sql = "INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `trans_code`, `beneficiary`, `policy_no`, `cheque_detail`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `approve_by`, `approve_on`, `insured_code`, `insured_name`, `party_code`, `party_name`, `party_type`) VALUES ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
        
        // credit
        $gl['account_code'] = $post['trans_type'] === 'PYM' ? '43148' : $description[1];
        $gl['account_name'] = $post['trans_type'] === 'PYM' ? 'Sterling Bank Plc - 114' : $description1[1];
        $gl['debit'] = 0;
        $gl['credit'] = $post['commission'];
        //
        $sql .= ", ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['trans_code'] . "', '" . $gl['beneficiary'] . "', '" . $gl['policy_no'] . "', '" . $gl['cheque_detail'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "', '" . $gl['insured_code'] . "', '" . $gl['insured_name'] . "', '" . $gl['party_code'] . "', '" . $gl['party_name'] . "', '" . $gl['party_type'] . "')";
    }
    
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    $db->query($sql);
    $db->execute();

    echo json_encode(array('status' => true, 'data' => 'ASSET SAVED')); exit;
}

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IMS DNCN GL RECONCILIATION</title>
    <style>
        .table-01 {
            border-collapse: collapse;
        }
        
        .table-01 th, .table-01 td {
            border: 1px solid #b8b8b8;
            padding: 0.5em;
        }
        
        .table-01 tr:nth-child(odd) {
            background-color: #f6f6f6;
        }
        
        .table-02 th, .table-02 td {
            font-size: 8pt;
        }
    </style>
</head>

<body>

<form>
    <table class="table-01" style="width: 180px; position: fixed; left: calc(100% - 185px); top: 8px; margin-bottom: 8px; border: 3px solid #000000; background-color: #ffffff; box-shadow: 2px 2px 2px #777777;">
        <tr>
            <td>Process</td>
            <td style="width: 25px"><input type="checkbox" id="process" onclick="dataUpload({})"></td>
        </tr>
        <tr>
            <td>Scroll</td>
            <td><input type="checkbox" id="scroll" checked></td>
        </tr>
    </table>
    
    <table class="table-01" style="width: calc(100% - 185px); margin-bottom: 8px">
        <tr>
            <td><strong>IMS DNCN GL RECONCILIATION</strong></td>
        </tr>
        <tr>
            <td>
                Year: <select id="year" style="margin-right: 20px">
                    <option value="">--Select--</option><?php for ($i = date('Y'); $i >= date('Y') - 10; $i--) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    } ?></select>
                Month: <select id="month" style="margin-right: 20px">
                    <option value="">--Select--</option><?php for ($i = 1; $i <= 12; $i++) {
                        echo '<option value="' . $i . '">' . date('F', strtotime(date('Y-' . substr('00' . $i, -2) . '-01'))) . '</option>';
                    } ?></select>
                <button id="load" type="button" onclick="scheduleUpload({result: '#result'})">Load</button>
            </td>
        </tr>
    </table>
    
    <table id="result" class="table-01 table-02" style="width: calc(100% - 185px); margin-bottom: 8px">
        <tr>
            <td></td>
        </tr>
    </table>
</form>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/moment.min.js"></script>

<script>
    
    let heading;
    let rows = [];
    //
    let branches = <?php echo json_encode($branches) ?>;
    let account = <?php echo json_encode($account) ?>;
    //console.log(array_list);
    
    // upload file
    let scheduleUpload = (json) => {
        //
        reset({});
        //
        $('#load').html('Loading...').prop({disabled: true});
        $.post('', {func: 'load', year: $('#year').val(), month: $('#month').val()}, function (data) {
            //console.log(data);
            $('#load').html('Refresh');//.prop({disabled: false});
            
            //
            if (data.status) {
                //console.log(data.data.length);
                if (data.data.length > 0) {
                    // trim trailing spaces
                    let first = true;
                    $(json.result).find('tr').remove();
                    heading = ['dncn_no', 'ref_no', 'policy_no', 'branch_id', 'subrisk_code', 'trans_type', 'trans_date', 'gross_premium', 'commission', 'option_type', 'insured_code', 'insured_name', 'party_code', 'party_name', 'currency_code', 'currency_rate', 'invoice_id', 'trans_detail', 'trans_code', 'submit_by', 'submit_on', 'approve_by', 'approve_on', 'account_code', 'account_name'];
                    //
                    $.each(data.data, function (i, v) {
                        //console.log(v);
                        //
                        let html = '';
                        if (first) {
                            html = '<tr>';
                            heading.forEach(function (v_, i_) {
                                html += '<td><strong>' + v_ + '</strong></td>';
                            });
                            html += '</tr>';
                            $(json.result).append(html);
                            first = false;
                        }
                        //
                        
                        html = '<tr class="row" style="">';
                        //html = '<tr class="row" style="' + (array_list.includes(v['Type of Cover']) ? '' : 'background-color: #ffd3d3') + '">';
                        //html = '<tr class="row" style="' + (array_list.includes(v['Insurance Company']) ? '' : 'background-color: #ffd3d3') + '">';
                        heading.forEach(function (v_, i_) {
                            // remove all undefined
                            if (v[v_] === undefined) {
                                v[v_] = '';
                            }
                            //
                            html += '<td>' + v[v_] + '</td>';
                        });
                        html += '</tr>';
                        $(json.result).append(html);
                        
                    });
                }
            }
            
            processLoad({});
            
            
        }, 'JSON');
        
    }
    
    // processLoad
    let processLoad = (json) => {
        // table records
        //let count = 0;
        $('tr.row').each(function () {
            //
            let row = {}
            let tr = $(this);
            //
            row.row_id = tr.index();
            
            $.each(heading, function (i, v) {
                row[v] = tr.find('td:eq(' + i + ')').html();
            });
            //
            //console.log(row);
            //if (count > 100) return false; else count++;
            rows.push(row);
        });
        //console.log(rows);
    }
    
    //
    let dataUpload = (json) => {
        //console.log(rows.length);
        // exists?
        if (rows.length > 0) {
            let row = rows.shift();
            row.func = 'process';
            //console.log(row);
            $.post('', row, function (data) {
                console.log(data);
                let current = $('#result').find('tr:eq(' + row.row_id + ')');
                //
                if (data.status) {
                    current.css({'background-color': '#c4ffbd'});
                } else if (data.message === 'VOUCHER EXISTS') {
                    current.css({'background-color': '#bdffff'});
                }
                // scroll
                if ($('#scroll').prop('checked'))
                    $('html,body').animate({scrollTop: current.position().top}, 0.5);
                // next
                if ($('#process').prop('checked')) {
                    dataUpload();
                }
            }, 'JSON');
        }
    }
    
    // reset
    let reset = (json) => {
        $('#process').prop({'checked': false});
        $('#scroll').prop({'checked': true});
    }
    
    $(function ($) {
        
        reset({});
        
    });

</script>

</body>
</html>