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
        "SELECT iv_.account_code, iv_.account_name, iv_.debit, iv_.credit, iv_.voucher_no, iv_.voucher_type, iv_.invoice_id, iv_.ref_no, iv_.branch_id, iv_.trans_date, iv_.trans_detail, iv_.beneficiary, iv_.currency_code, iv_.currency_rate, iv_.submit_by, iv_.submit_on, iv_.approve_by, iv_.approve_on, gl_.voucher_no voucher_no_check FROM
        (
            SELECT iv.account_code, iv.account_name, iv.amount debit, iv.deduction credit, iv.voucher_no, iv.voucher_type, iv.invoice_id, iv.ref_no, iv.branch_id, iv.trans_date, iv.naration trans_detail, iv.beneficiary, iv.currency_code, iv.currency_rate, iv.submit_by, iv.submit_on, coalesce(iv.approve_by, if(iv.submit_by='oladeji.kazeem@1241','oarinola@1241','oladeji.kazeem@1241')) approve_by, coalesce(iv.approve_on, iv.submit_on) approve_on FROM act_invoices iv WHERE YEAR(iv.trans_date) = '" . $post['year'] . "' AND MONTH(iv.trans_date) = '" . $post['month'] . "' AND iv.voucher_type LIKE 'CASH_%'
        ) iv_ LEFT JOIN
        (
            SELECT DISTINCT gl.voucher_no FROM act_gledger gl WHERE YEAR(gl.trans_date) = '" . $post['year'] . "' AND MONTH(gl.trans_date) = '" . $post['month'] . "' AND gl.voucher_type LIKE 'CASH_%'
        ) gl_ ON iv_.voucher_no = gl_.voucher_no
        HAVING voucher_no_check IS NULL ";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    $db->query($sql);
    $rows = $db->resultSet();
    
    echo json_encode(array('status' => true, 'data' => $rows));
    exit;
}

if ($post['func'] == 'process') {
    
    /*
    INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `trans_code`, `beneficiary`, `policy_no`, `cheque_detail`, `tin_number`, `currency_code`, `currency_rate`, `r_status`, `upload_id`, `reconcile`, `submit_by`, `submit_on`, `approve_by`, `approve_on`, `insured_code`, `insured_name`, `party_code`, `party_name`, `party_type`, `remarks`) VALUES ('50102', 'Cash on Hand', 0.0000, 60000.0000, 'VJ2021/00250/HQ', 'CASH_JOURNAL', '41d6b6452c1a25e04f3269ffef8ba44b', 'CASH', '1241', '2021-07-13 16:43:13', 'Deposit', NULL, 'UBA', NULL, NULL, NULL, 'LRD', 0.01, 0, 0, NULL, 'oladeji.kazeem@1241', '2021-07-13 16:43:13', 'oladeji.kazeem@1241', '2021-07-13 16:43:36', NULL, NULL, NULL, NULL, NULL, NULL);
     */
    
    // exists
    // $sql = "SELECT 1 FROM act_gledger WHERE voucher_no = '" . $post['voucher_no'] . "' AND voucher_type = '" . $post['voucher_type'] . "' LIMIT 1";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    // $db->query($sql);
    // if ($db->rowCount() > 0) {
    //     echo json_encode(array('status' => false, 'message' => 'VOUCHER EXISTS'));
    //     exit;
    // }
    
    //
    $gl = $post;
    
    //
    $sql = "INSERT INTO `act_gledger` (`account_code`, `account_name`, `debit`, `credit`, `voucher_no`, `voucher_type`, `invoice_id`, `ref_no`, `branch_id`, `trans_date`, `trans_detail`, `beneficiary`, `currency_code`, `currency_rate`, `submit_by`, `submit_on`, `approve_by`, `approve_on`) VALUES ('" . $gl['account_code'] . "', '" . $gl['account_name'] . "', '" . $gl['debit'] . "', '" . $gl['credit'] . "', '" . $gl['voucher_no'] . "', '" . $gl['voucher_type'] . "', '" . $gl['invoice_id'] . "', '" . $gl['ref_no'] . "', '" . $gl['branch_id'] . "', '" . $gl['trans_date'] . "', '" . $gl['trans_detail'] . "', '" . $gl['beneficiary'] . "', '" . $gl['currency_code'] . "', '" . $gl['currency_rate'] . "', '" . $gl['submit_by'] . "', '" . $gl['submit_on'] . "', '" . $gl['approve_by'] . "', '" . $gl['approve_on'] . "')";
    
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    
    $db->query($sql);
    $db->execute();
    
    echo json_encode(array('status' => true, 'data' => 'ASSET SAVED'));
    exit;
}

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IMS INVOICE GL RECONCILIATION</title>
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
            <td><strong>IMS INVOICE GL RECONCILIATION</strong></td>
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
                    heading = ['account_code', 'account_name', 'debit', 'credit', 'voucher_no', 'voucher_type', 'invoice_id', 'ref_no', 'branch_id', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'submit_on', 'approve_by', 'approve_on'];
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