<?php

require_once 'libs/Database.php';

$db = new Database('localhost', 'brokerage', 'root', 'brokerage');
//$db = new Database('epicuredb.mysql.database.azure.com', 'safamadmin@epicuredb', 'S@f@#012', 'brokerage_epicure');

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

// process
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if ($post['func'] == 'process') {
    // client exists
    // INSERT INTO `tec_client` (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `last_name`, `middle_name`, `title`, `religion`, `address`, `town`, `phone`, `email2`, `phone2`, `birth_date`, `gender`, `marital_status`, `occupation`, `state`, `country`, `sector`, `business`, `bvn_number`, `id_type`, `id_number`, `picture`, `client_code`, `agent_code`, `username2`, `doc_path`) VALUES ('kidudu@me.com', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', NULL, NULL, 0, '2021-04-20 10:39:16', '2021-04-20 10:39:18', '2021-04-20 10:39:22', NULL, NULL, NULL, '1', NULL, 'echezona.i@epicureinsurancebrokers.com', '2021-04-20 10:39:18', NULL, '2021-04-20 10:39:22', 'OGHENAKPOBO', 'IDUDU', NULL, 'Mr.', 'Christianity', 'C5 Millenium Homes Estate, Oniru, Victoria Island, Lagos.', NULL, '2348037181014', NULL, NULL, '1974-09-08', 'Male', 'Married', 'Law and legal', 'Lagos', 'Nigeria', 'Private', 'Individual', NULL, 'PASSPORT', 'A50488533', NULL, 'C/21/000221', 'A/20/000003', 'Oluwatobi.O@epicureinsurancebrokers.com', 'cda37f2c-ef31-4ea5-9e48-9e073227e296');
    
    $post['first_name'] = str_replace(' & ', 'AND', str_replace('&AMP;', 'AND', $post['first_name']));
    
    $sql = "SELECT client_code FROM tec_client WHERE username = '" . addslashes($post['username']) . "' OR first_name = '" . addslashes(trim($post['first_name'])) . "' OR TRIM(CONCAT(COALESCE(title, ''), ' ', COALESCE(first_name, ''), ' ', COALESCE(last_name, ''))) LIKE '%" . addslashes(trim($post['first_name'])) . "%' LIMIT 1";
    // echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $client = $db->single();
    if ($client) {
        $post['client_code'] = $client->client_code;
    } else {
        $sql = "INSERT INTO tec_client (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `client_code`, `agent_code`) VALUES ('". $post['username'] . "', '". $post['submit_by'] . "', '". $post['submit_on'] . "', '". $post['modified_by'] . "', '". $post['modified_on'] . "', '". $post['first_name'] . "', '". $post['client_code'] . "', '". $post['agent_code'] . "')";
        $db->query($sql);
        try { $db->execute(); } catch (PDOException $e) {
            echo json_encode(array('status' => false, 'message' => $e->getMessage() . ' ( ' . $sql . ' )')); exit;
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
    
    echo json_encode(array('status' => true, 'data' => 'DATA SAVED')); exit;
}

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
            <td colspan="2"><strong>Epicure Data Migration</strong></td>
        </tr>
        <tr>
            <td>Select EXCEL file: <input id="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" onChange="scheduleUpload({excelfile:'#file', result: '#result'})"></td>
            <td>Select EXCEL files only</td>
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
<script src="js/xls.core.min.js"></script>
<script src="js/xlsx.core.min.js"></script>

<script>
    
    let rows = [];
    //
    let array_list = <?php echo json_encode($array_list) ?>;
    //console.log(array_list);
    let array_risk = <?php echo json_encode($array_risk) ?>;
    //console.log(array_risk);
    
    // upload file
    let scheduleUpload = (json) => {
        //
        reset({});
        //
        let regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
        /*Checks whether the file is a valid excel file*/
        if (regex.test($(json.excelfile).val().toLowerCase())) {
            let xlsxflag = false; /*Flag for checking whether excel is .xls format or .xlsx format*/
            if ($(json.excelfile).val().toLowerCase().indexOf(".xlsx") > 0) {
                xlsxflag = true;
            }
            /*Checks whether the browser supports HTML5*/
            if (typeof (FileReader) != "undefined") {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let data = e.target.result;
                    /*Converts the excel data in to object*/
                    let workbook;
                    if (xlsxflag) {
                        workbook = XLSX.read(data, {type: 'binary'});
                    } else {
                        workbook = XLS.read(data, {type: 'binary'});
                    }
                    
                    /*Convert the cell value to Json*/
                    let exceljson;
                    if (xlsxflag) {
                        exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[workbook.SheetNames[0]]);
                    } else {
                        exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets[workbook.SheetNames[0]]);
                    }
                    //console.log(exceljson[0]);
                    
                    //let excelfilter = {};
                    if (exceljson.length > 0) {
                        // trim trailing spaces
                        let first = true;
                        $(json.result).find('tr').remove();
                        let heading = ['username', 'client_code', 'first_name', 'trans_date', 'duration', 'subrisk_name', 'company_name', 'sum_insured', 'premium_rate', 'gross_premium', 'commission', 'vat', 'submit_by', 'upload_id'];
                        //
                        heading.push('policy_code', 'debit_code', 'receipt_code');
                        //
                        $.each(exceljson, function (i, v) {
                            //console.log(v);
                            if (v['client_code'] === undefined || v['client_code'] === '') return;
                            //
                            if (v['gross_premium'] === undefined || v['gross_premium'] === '') return;
                            let gross_premium = parseFloat('0' + $.trim(v['gross_premium']).replace(/[^\d.]/g, ''));
                            if (gross_premium <= 0) return;
                            v['gross_premium'] = gross_premium;
                            //
                            if (v['subrisk_name'] === undefined || v['subrisk_name'] === '') return;
                            if (v['subrisk_name'] === 'CRITICAL ILLNESS INSURANCE' && v['first_name'] !== 'HYGIA HMO') return;
                            
                            if (v['premium_rate'] === undefined || v['premium_rate'] === '') v['premium_rate'] = '0';
                            if (v['first_name'] === 'HYGIA HMO') {
                                v['premium_rate'] = '0.6';
                                v['sum_insured'] = '0';
                            }
                            let premium_rate = parseFloat('0' + v['premium_rate'].replace(/[^\d.]/g, ''));
                            if (premium_rate === 0) premium_rate = array_risk[v['subrisk_name']]['premium_rate'];
                            v['premium_rate'] = premium_rate.toString();
    
                            if (v['subrisk_name'] === 'THIRD PARTY PRIVATE MOTOR') v['sum_insured'] = '1000000';
                            if (v['sum_insured'] === undefined || v['sum_insured'] === '') v['sum_insured'] = '0';
                            let sum_insured = parseFloat('0' + v['sum_insured'].replace(/[^\d.]/g, ''));
                            if (sum_insured === 0) {
                                v['sum_insured'] = Math.round(gross_premium * 100 / premium_rate * 100) / 100;
                            } else {
                                v['premium_rate'] = Math.round(gross_premium / sum_insured * 100 * 10000) / 10000;
                            }
                            
                            // FSP/F/LA/000010/21
                            //console.log(v['subrisk_name']);
                            v['policy_code'] = array_risk[v['subrisk_name']]['alpha'] + '/' + array_risk[v['subrisk_name']]['risk_code'] + '/LA/1' + ('00000' + v['upload_id']).substr(-5) + '/20';
                            
                            // DN/LA/000133/21
                            v['debit_code'] = 'DN/LA/1' + ('00000' + v['upload_id']).substr(-5) + '/20';
                            
                            // R/1/000027/21
                            v['receipt_code'] = 'R/1/1' + ('00000' + v['upload_id']).substr(-5) + '/20';
                            
                            //
                            let html = '';
                            // heading
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
                            html = '<tr class="row">';
                            //html = '<tr class="row" style="' + (array_list.includes(v['Type of Cover']) ? '' : 'background-color: #ffd3d3') + '">';
                            //html = '<tr class="row" style="' + (array_list.includes(v['Insurance Company']) ? '' : 'background-color: #ffd3d3') + '">';
                            heading.forEach(function (v_, i_) {
                                //
                                html += '<td>' + v[v_] + '</td>';
                            });
                            html += '</tr>';
                            $(json.result).append(html);
                            
                        });
                    }
                    //console.log(excelfilter);
                    
                    processLoad({});
                }
                if (xlsxflag) {/*If excel file is .xlsx extension than creates a Array Buffer from excel*/
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
        
        //
        //scheduleTableCalc();
        
    }
    
    // processLoad
    let processLoad = (json) => {
        // table records
        let count = 0;
        $('tr.row').each(function() {
            // INSERT INTO `tec_client` (`username`, `submit_by`, `submit_on`, `modified_by`, `modified_on`, `first_name`, `last_name`, `middle_name`, `title`, `religion`, `address`, `town`, `phone`, `email2`, `phone2`, `birth_date`, `gender`, `marital_status`, `occupation`, `state`, `country`, `sector`, `business`, `bvn_number`, `id_type`, `id_number`, `picture`, `client_code`, `agent_code`, `username2`, `doc_path`) VALUES ('kidudu@me.com', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', '$2a$14$ftFb8O5YTp6unJu8ztBzxeXJAEcy7PzaqzL62HT2MBFSeBZlDdC3G', NULL, NULL, 0, '2021-04-20 10:39:16', '2021-04-20 10:39:18', '2021-04-20 10:39:22', NULL, NULL, NULL, '1', NULL, 'echezona.i@epicureinsurancebrokers.com', '2021-04-20 10:39:18', NULL, '2021-04-20 10:39:22', 'OGHENAKPOBO', 'IDUDU', NULL, 'Mr.', 'Christianity', 'C5 Millenium Homes Estate, Oniru, Victoria Island, Lagos.', NULL, '2348037181014', NULL, NULL, '1974-09-08', 'Male', 'Married', 'Law and legal', 'Lagos', 'Nigeria', 'Private', 'Individual', NULL, 'PASSPORT', 'A50488533', NULL, 'C/21/000221', 'A/20/000003', 'Oluwatobi.O@epicureinsurancebrokers.com', 'cda37f2c-ef31-4ea5-9e48-9e073227e296');
            
            let row = {}
            let tr = $(this);
            //
            row.row_id = tr.index();
            // username	client_code	first_name	trans_date	duration	subrisk_name	company_name	sum_insured	premium_rate	gross_premium	commission	vat	submit_by	upload_id	policy_code	debit_code	receipt_code
            row.username = tr.find('td:eq(0)').html();
            row.client_code = tr.find('td:eq(1)').html();
            row.agent_code = 'A/20/000003';
    
            let client = tr.find('td:eq(2)').html().trim().toUpperCase();
            //row.title = (client.substr(0, 3) === 'MRS') ? 'Mrs.' : (client.substr(0, 2) === 'MR' ? 'Mr.' : '');
            //row.first_name = (client.substr(0, 3) === 'MRS') ? client.substr(3).trim() : (client.substr(0, 2) === 'MR' ? client.substr(2).trim() : client);
            row.first_name = client;
            row.last_name = row.middle_name = '';
    
            row.trans_date = tr.find('td:eq(3)').html();
            row.duration = tr.find('td:eq(4)').html();
            row.subrisk_name = tr.find('td:eq(5)').html();
            row.company_name = tr.find('td:eq(6)').html();
            
            row.sum_insured = tr.find('td:eq(7)').html();
            row.premium_rate = tr.find('td:eq(8)').html();
            row.gross_premium = tr.find('td:eq(9)').html();
            row.commission = tr.find('td:eq(10)').html();
            row.vat = tr.find('td:eq(11)').html();
            
            row.submit_by = tr.find('td:eq(12)').html();
            row.submit_on = moment().format('YYYY-MM-DD hh:mm:ss');
            row.modified_by = tr.find('td:eq(12)').html();
            row.modified_on = moment().format('YYYY-MM-DD hh:mm:ss');
            
            row.policy_code = tr.find('td:eq(14)').html();
            row.debit_code = tr.find('td:eq(15)').html();
            row.receipt_code = tr.find('td:eq(16)').html();
            
            //
            //console.log(row);
            //if (count > 100) return false; else count++;
            rows.push(row);
        });
        // console.log('rows');
    }
    
    //
    let dataUpload = (json) => {
        //console.log(rows.length);
        // exists?
        if (rows.length > 0) {
            let row = rows.shift();
            row.func = 'process';
            //  console.log(row);return;
            $.post('', row, function(data) {
                // console.log(data);
                let current = $('#result').find('tr:eq(' + row.row_id + ')');
                //
                if (data.status) {
                    current.css({'background-color': '#c4ffbd'});
                }
                else if (data.message === 'ASSET CODE EXISTS') {
                    current.css({'background-color': '#bdffff'});
                }
                // scroll
                if ($('#scroll').prop('checked'))
                    $('html,body').animate({ scrollTop: current.position().top }, 0.5); 
                //next
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
    
    $(function($) {
       
        reset({});
        
    });
    
</script>

</body>
</html>