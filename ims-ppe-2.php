<?php

require_once 'libs/Database.php';

$db = new Database('localhost', 'ims', 'ims', 'ims'); // localhost
//$db = new Database('ims.mutualng.com', 'root', 'Mutual@123456', 'ims'); // production

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
$sql = "SELECT group_code, group_alpha FROM ass_group";
$db->query($sql);
$rows = $db->resultSet();
$groups = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $groups[$val->group_code] = (array)$val;
    }
}

//
$sql = "SELECT account_code, account_name FROM act_account";
$db->query($sql);
$rows = $db->resultSet();
$accounts = array();
if (!empty($rows)) {
    foreach ($rows as $val) {
        $accounts[$val->account_code] = (array)$val;
    }
}

// process
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if ($post['func'] == 'process') {
    //
    if (!in_array($post['group_code'], array_keys($groups))) {
        echo json_encode(array('status' => false, 'message' => 'GROUP CODE INVALID'));
        exit;
    }
    //
    if (!in_array($post['asset_branch'], array_keys($branches))) {
        echo json_encode(array('status' => false, 'message' => 'BRANCH CODE INVALID'));
        exit;
    }
    // exists
    $sql = "SELECT 1 FROM ass_detail WHERE asset_code = '" . $post['asset_code'] . "' LIMIT 1";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    if ($db->rowCount() > 0) {
        echo json_encode(array('status' => false, 'message' => 'ASSET CODE EXISTS'));
        exit;
    }
    //
    $sql = "INSERT INTO `ass_detail` (`asset_code`, `asset_name`, `asset_detail`, `group_code`, `asset_branch`, `user_detail`, `asset_quantity`, `unit_price`, `asset_value`, `salvage_value`, `life_span`, `trans_date`, `start_date`, `account_code`, `account_name`, `amount`, `branch_id`, `submit_by`, `submit_on`, `trans_guid`, `remarks`, `manual_upload`) VALUES ('" . $post['asset_code'] . "', '" . $post['asset_name'] . "', '" . $post['asset_detail'] . "', '" . $post['group_code'] . "', '" . $post['asset_branch'] . "', '" . $post['user_detail'] . "', '" . $post['asset_quantity'] . "', '" . $post['unit_price'] . "', '" . $post['asset_value'] . "', " . $post['salvage_value'] . ", '" . $post['life_span'] . "', '" . $post['trans_date'] . "', '" . $post['start_date'] . "', '" . $post['account_code'] . "', '" . $post['account_name'] . "', '" . $post['amount'] . "', '" . $post['branch_id'] . "', '" . $post['submit_by'] . "', '" . $post['submit_on'] . "', '" . $post['trans_guid'] . "', '" . $post['remarks'] . "', 'MANUAL')";
    //echo json_encode(array('status' => false, 'message' => $sql)); exit;
    $db->query($sql);
    $db->execute();
    
    //
    $post['trans_detail'] = 'Asset ' . $post['remarks'] . ': Asset Value=' . number_format($post['asset_value'], '2', '.', ',') . ', Salvage=' . number_format($post['salvage_value'], '2', '.', ',') . ', Start date=' . $post['start_date'] . ', Life Span=' . $post['life_span'];
    //
    $sql = "INSERT INTO `ass_trans` (`asset_code`, `trans_date`, `trans_type`, `trans_detail`, `manual_upload`) VALUES ('" . $post['asset_code'] . "', '" . $post['trans_date'] . "', '" . $post['remarks'] . "', '" . $post['trans_detail'] . "', 'MANUAL')";
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
    <title>IMS PPE (Legacy Asset Code) data migration</title>
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
            <td colspan="2"><strong>IMS PPE Data Migration</strong></td>
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
<script src="js/jquery.md5.js"></script>

<script>
    
    let rows = [];
    //
    let branches = <?php echo json_encode($branches) ?>;
    let group = <?php echo json_encode($groups) ?>;
    let account = <?php echo json_encode($accounts) ?>;
    //console.log(array_list);
    
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
                        let heading = ['asset_code', 'asset_name', 'asset_detail', 'group_code', 'department_code', 'asset_branch', 'user_detail', 'asset_quantity', 'unit_price', 'asset_value', 'salvage_value', 'trans_mode', 'life_span', 'company_name', 'voucher_no', 'trans_date', 'start_date'];
                        //
                        $.each(exceljson, function (i, v) {
                            //console.log(v);
                            if (v['asset_code'] === undefined || v['asset_code'] === '') return;
                            
                            if (v['department_code'] === undefined || v['department_code'] === '') v['department_code'] = 'DPT/014';
                            if (v['user_detail'] === undefined || v['user_detail'] === '') v['user_detail'] = v['department_code'];
                            
                            if (!moment(v["trans_date"]).isValid()) return;
                            v['trans_date'] = moment(v['trans_date']).format('YYYY-MM-DD');
                            v['start_date'] = parseInt('0' + moment(v["trans_date"]).format('DD')) < 15 ? moment(v["trans_date"]).add(1, 'month').format('YYYY-MM-01') : moment(v["trans_date"]).add(1, 'month').format('YYYY-MM-01');
                            //
                            if (v["asset_value"] === undefined || v["asset_value"] === '') v["asset_value"] = '0';
                            let asset_value = parseFloat('0' + v["asset_value"].replace(/[^\d.]/, ''));
                            if (asset_value === 0) return;
                            v['asset_value'] = asset_value;
                            
                            v['unit_price'] = v['asset_value'];
                            if (v['asset_value'] > 0) v['unit_price'] = asset_value;
                            
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
        //let count = 0;
        $('tr.row').each(function () {
            // asset_code	asset_name	asset_detail	group_code	department_code	asset_branch	user_detail	asset_quantity	unit_price	asset_value	salvage_value	trans_mode	life_span	company_name	voucher_no	trans_date	start_date
            
            let row = {}
            let tr = $(this);
            //
            row.row_id = tr.index();
            
            row.asset_code = tr.find('td:eq(0)').html();
            row.asset_name = tr.find('td:eq(1)').html();
            row.asset_detail = tr.find('td:eq(2)').html();
            row.group_code = tr.find('td:eq(3)').html();
            row.department_code = tr.find('td:eq(4)').html();
            row.asset_branch = tr.find('td:eq(5)').html();
            row.user_detail = tr.find('td:eq(6)').html().replaceAll('&nbsp;', '');
            row.asset_quantity = tr.find('td:eq(7)').html();
            row.unit_price = tr.find('td:eq(8)').html();
            row.asset_value = tr.find('td:eq(9)').html();
            ;
            row.salvage_value = tr.find('td:eq(10)').html();
            row.traans_mode = tr.find('td:eq(11)').html();
            row.life_span = tr.find('td:eq(12)').html();
            row.company_name = tr.find('td:eq(13)').html();
            row.voucher_no = tr.find('td:eq(14)').html();
            row.trans_date = tr.find('td:eq(15)').html();
            row.start_date = tr.find('td:eq(16)').html();
            //
            row.account_code = row.group_code;
            row.account_name = account[row.group_code]['account_name'];
            row.amount = row.asset_value;
            //
            row.submit_by = 'oarinola@1241';
            row.submit_on = moment().format('YYYY-MM-DD HH-mm-ss');
            row.trans_guid = $.md5(row.asset_code);
            row.currency_code = 'NGN';
            row.currency_rate = 1;
            row.branch_id = row.asset_branch;
            //
            row.remarks = 'CREATED';
            row.manual_upload = 'MANUAL';
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
                } else if (data.message === 'ASSET CODE EXISTS') {
                    current.find('td:eq(0)').css({'background-color': '#eea2a2'});
                } else if (data.message === 'GROUP CODE INVALID') {
                    current.find('td:eq(3)').css({'background-color': '#eea2a2'});
                } else if (data.message === 'BRANCH CODE INVALID') {
                    current.find('td:eq(5)').css({'background-color': '#eea2a2'});
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