<?php
    require_once 'libs/Database.php';
    require 'SqlQuery.php';

    $db = new Database('localhost', 'root', 'Scaredinfo1', 'brokerage_busag');
    // $sqlQuery = new SqlQuery();
    $sql = "SELECT t1.auto_id, t1.subrisk_code, t1.subrisk_name, t1.alpha, t1.digit, t1.def_premium_rate, t2.premium_rate, t2.com_rate, t2.vat_rate, t1.def_com_rate, t1.risk_code, t1.status, t2.risk_name, LEFT(t1.modified_on, 16) modified_on FROM cod_subrisk t1 LEFT JOIN (SELECT t21.risk_code, t21.risk_name, t21.premium_rate, t21.com_rate, t21.vat_rate FROM cod_risk t21) t2 ON t1.risk_code = t2.risk_code WHERE 1=1 ";
    //
    $db->query($sql);
    $rows = $db->resultSet(); 
    // var_dump($rows);exit;
    $subriskObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $subriskObj->{strtolower($v->subrisk_name)} = ["subrisk_code" =>$v->subrisk_code, "risk_code" =>$v->risk_code, "alpha"=>$v->alpha,  "digit"=>$v->digit, "premium_rate"=>$v->premium_rate, "com_rate"=>$v->com_rate, "vat_rate"=>$v->vat_rate ];
        }
    }
    // var_dump($subriskObj);exit;
    $sql = "SELECT t1.* FROM tec_company t1 ORDER BY t1.company_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $insurersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $insurersObj->{strtolower($v->company_name)} = $v->company_code;
        }
    }

    $sql = "SELECT t1.* FROM tec_company t1 WHERE t1.company_type = 'Brokerage' ";
    $db->query($sql);
    $rows = $db->resultSet();

    $brokersObj = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $brokersObj->{strtolower($v->company_name)} = $v->company_code;
        }
    }
    
    $sql = "SELECT t1.first_name, t1.client_name, t1.client_code FROM tec_client t1 ORDER BY t1.client_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $clients = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $clients->{strtolower($v->client_name)} = $v->client_code;
        }
    }

    $sql_pol = "SELECT t1.subrisk_code, t1.client_code, t3.client_name, t1.policy_code, t2.subrisk_name FROM tec_policy t1
    LEFT JOIN (SELECT t21.subrisk_code, t21.subrisk_name FROM cod_subrisk t21)t2 ON t1.subrisk_code = t2.subrisk_code
    LEFT JOIN (SELECT t31.client_code, t31.client_name FROM tec_client t31)t3 ON t1.client_code = t3.client_code
    ";
    $db->query($sql_pol);
    $rows_policies = $db->resultSet();

    $policies = (object)array();
    if ($rows_policies !== false) {
        foreach ($rows_policies as $p) {
            $policies->{strtolower($p->policy_code)} = $p;
        }
    }
    
    $sql = "SELECT t1.agent_name, t1.agent_code FROM tec_agent t1 ORDER BY t1.agent_name";
    $db->query($sql);
    $rows = $db->resultSet();

    $agents = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $agents->{strtolower($v->agent_name)} = $v->agent_code;
        }
    }

    
    $sql = "SELECT t1.first_name, t1.last_name, t1.username FROM sys_user t1 ORDER BY t1.first_name";
    $db->query($sql);
    $rows = $db->resultSet();
    
    $sys_user = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $sys_user->{strtolower($v->first_name)} = $v->username;
        }
    }
    
    $sql = "SELECT t1.group_code, t1.group_name FROM act_group t1";
    $db->query($sql);
    $rows = $db->resultSet();

    $act_group = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $act_group->{strtolower($v->group_name)} = $v->group_code;
        }
    }

    $sql = "SELECT t1.account_code, t1.account_name FROM act_account t1";
    $db->query($sql);
    $rows = $db->resultSet();

    $accounts = (object)array();
    if ($rows !== false) {
        foreach ($rows as $v) {
            $accounts->{strtolower($v->account_name)} = $v->account_code;
        }
    }

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
            .header{
                display:flex;
            }

            .btn-action{
                border: 1px solid black;
                padding: 4px;
                width:fit-content;
                height:fit-content;
                margin-left: 1px;
                border-radius: 4px;
                background-color: #2a0c8f;
                color:#fff;
                pointer:cursor;
            }
            span{
                background-color: #0b0a11;
                color:#fff;

            }
            .select-file{
                border: 1px solid black;
                padding: 4px;
                width:fit-content;
                height:fit-content;
                margin-left: 1px;
                border-radius: 4px;
                background-color: #1410d6;
                color:#fff;
                pointer:cursor;
            }
            .v-save, .v-unsave {
                border: 1px solid black;
                padding: 4px;
                width:fit-content;
                height:fit-content;
                margin-left: 1px;
                border-radius: 4px;
                background-color: #9c1a25;
                color:#fff;
                pointer:cursor;

            }
            .btn-process{
                background-color:green;
                color:white;
                padding:4px;
                width:fit-content;
                height:fit-content;
            }
        </style>
    </head>

    <body>


        <div>
            <div class="header">
                <label class="select-file" onclick="select_file()"> Select File</label>
                <label class="btn-post"><input type="checkbox" id="process" onclick="processload2(event)"> Post</label>
                
                <label id="custom" class="btn-action" onclick="customDuty({result: '#result', action: 'custom', url: 'http://localhost/migration/customTariff.php'})" style="cursor:pointer;"> custom tariff </label>
                <label id="account" class="btn-action" onclick="act_account({result: '#result', action: 'account', url: 'http://localhost/migration/Accounts.php'})" style="cursor:pointer;"> account </label>
                <label id="act_gledger" class="btn-action" onclick="act_gledger({result: '#result', action: 'act_gledger', url: 'http://localhost/migration/Act_gledger.php'})" style="cursor:pointer;"> ledger </label>
                <label id="insurer" class="btn-action" onclick="companyTable({result: '#result', action: 'insurer', url: 'http://localhost/migration/Company.php'})" style="cursor:pointer;"> insurers </label>
                <label id="broker" class="btn-action" onclick="brokersTable({result: '#result', action: 'broker', url: 'http://localhost/migration/Company.php'})" style="cursor:pointer;"> Brokers </label>
                <label id="subrisk" class="btn-action" onclick="subriskTable({result: '#result', action: 'subrisk', url: 'http://localhost/migration/Subrisk.php'})" style="cursor:pointer;"> subrisk </label>
                <label id="client" class="btn-action" onclick="clientsTable({result: '#result', action: 'client', url: 'http://localhost/migration/Client.php'})" style="cursor:pointer;"> Clients </label>
                <label id="policy" class="btn-action" onclick="policyTable({result: '#result', action: 'policy', url: 'http://localhost/migration/Policy.php'})" style="cursor:pointer;"> policy </label>
                <label id="debit" class="btn-action" onclick="debitTable({result: '#result', action: 'debit', url: 'http://localhost/migration/Debit.php'})" style="cursor:pointer;"> debit </label>
                <label id="credit" class="btn-action" onclick="creditTable({result: '#result', action: 'credit', url: 'http://localhost/migration/Credit.php'})" style="cursor:pointer;"> credit </label>
                <label id="receipt" class="btn-action" onclick="receiptTable({result: '#result', action: 'receipt', url: 'http://localhost/migration/Receipt.php'})" style="cursor:pointer;"> receipt </label>
                <label id="payment" class="btn-action" onclick="paymentTable({result: '#result', action: 'payment', url: 'http://localhost/migration/Payment.php'})" style="cursor:pointer;"> payment </label>
                <label id="insurer"co_broker class="btn-action" onclick="coBrokerTable({result: '#result', action: 'co_broker', url: 'http://localhost/migration/CoBroker.php'})" style="cursor:pointer;"> coBrokers </label>
                <label id="start_end_date" class="btn-action" onclick="correct_start_end_date({result: '#result', action: 'start_end_date', url: 'http://localhost/migration/Correct_start_date.php'})" style="cursor:pointer;"> start_end </label>
                <label id="start_end_date" class="btn-action" onclick="convertSelectToArray()" style="cursor:pointer;"> convertSelectToArray </label>
                <label id="start_end_date" class="btn-action" onclick="convertSelectToTable({result: '#result', action: 'start_end_date', url: 'http://localhost/migration/VehicleMake.php'})" style="cursor:pointer;"> convertSelectToTable </label>
                 <select  id="vehicle-make">
                    <option class="" value="acura">Acura</option>
                    <option class="" value="audi">Audi</option>
                    <option class="" value="bmw">BMW</option>
                    <option class="" value="buick">Buick</option>
                    <option class="" value="cadillac">Cadillac</option>
                    <option class="" value="chevrolet">Chevrolet</option>
                    <option class="" value="chrysler">Chrysler</option>
                    <option class="" value="dodge">Dodge</option>
                    <option class="" value="eagle">Eagle</option>
                    <option class="" value="ford">Ford</option>
                    <option class="" value="geo">Geo</option>
                    <option class="" value="gmc">GMC</option>
                    <option class="" value="honda">Honda</option>
                    <option class="" value="hyundai">Hyundai</option>
                    <option class="" value="infiniti">INFINITI</option>
                    <option class="" value="isuzu">Isuzu</option>
                    <option class="" value="jaguar">Jaguar</option>
                    <option class="" value="jeep">Jeep</option>
                    <option class="" value="land-rover">Land Rover</option>
                    <option class="" value="lexus">Lexus</option>
                    <option class="" value="lincoln">Lincoln</option>
                    <option class="" value="mazda">Mazda</option>
                    <option class="" value="mercedes-benz">Mercedes-Benz</option>
                    <option class="" value="mercury">Mercury</option>
                    <option class="" value="mitsubishi">Mitsubishi</option>
                    <option class="" value="nissan">Nissan</option>
                    <option class="" value="oldsmobile">Oldsmobile</option>
                    <option class="" value="plymouth">Plymouth</option>
                    <option class="" value="pontiac">Pontiac</option>
                    <option class="" value="porsche">Porsche</option>
                    <option class="" value="saab">Saab</option>
                    <option class="" value="subaru">Subaru</option>
                    <option class="" value="suzuki">Suzuki</option>
                    <option class="" value="toyota">Toyota</option>
                    <option class="" value="volkswagen">Volkswagen</option>
                    <option class="" value="volvo">Volvo</option>
                </select>
                
                <label class="v-save">Saved <span id="saved">0</span></label>
                <label class="v-unsave"> UnSaved <span id="alreadyExist">0</span></label>
                <label id="process_btn" class="btn-process"></label>
            </div>

                <table id="result" class="table-01 table-02" style="width: calc(100% - 10px); margin-bottom: 8px">
                    <thead id="res_head">
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <input id="file" type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" onchange='importexcel(event,{excelfile:"#file", result: "#result"})' style="display:none">
            <!-- </form> -->
        </div>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/xls.core.min.js"></script>
        <script src="js/xlsx.core.min.js"></script>
        <script src="js/ibdate.js"></script>

    </body>
            
        <script>
            
            let savedCount = 0;
            let alreadyExist = 0;
            let mytimer;
            var exceljson = [];
            let excel_data = [];
            let action = "";
            let rows = [];
            let keys = [];
            let url = '';
            let selectValue = null;
            let systemUser = 'russia'
            let postToLedger = true
            let currencyCode = 'NGN';
            let branchAbbreviation = 'B';
            let branchCode = 'LAG/01/001';
            let agentCode = 'A/20/000003';
            let business = 'Corporate';
            let currencyRate = 1;
            let insurerProp = 'decimal';
            let remittanceAccount = '1000005'
            let receipt_by = 'eyitomabel@busaginsurancebrokers.com';
            // let clients = {};
            const subriskObj = <?php echo json_encode($subriskObj) ?>;
            const insurersObj = <?php echo json_encode($insurersObj) ?>;
            const policies = <?php echo json_encode($policies) ?>;
            const brokersObj = <?php echo json_encode($brokersObj) ?>;
            const agents = <?php echo json_encode($agents) ?>;
            const sysUser = <?php echo json_encode($sys_user) ?>;
            const clients = <?php echo json_encode($clients) ?>;
            const accounts = <?php echo json_encode($accounts) ?>;
            const act_group = <?php echo json_encode($act_group) ?>;
            //  console.log(sysUser);

            
            let convertSelectToArray = ()=>{
                selectValue = [];
                const selectElement = document.querySelector('#vehicle-make');
                // let counter = 0
                $.each(selectElement.options, (i, v)=>{
                    i + 1;
                    selectValue.push({sn: i, veh_make: v.value});
                    // 
                })
                // selectValue = Array.from(selectElement.options, option => {year :option.value});
                console.log(selectValue);
            }

            let convertSelectToTable = (json)=>{
                // console.log(json);return;
                url = json.url
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecompany";
                $("#action_name").html("select value saving");
                let counter = 0;
                
                if(selectValue.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return
                }
                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var selectfields = ['sn', 'veh_make'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    selectfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);

                    excel_data = selectValue.map(function(v, i) {
                        counter++;
                        html = '<tr id="'+i+'" class="row">';

                        selectfields.forEach(function(v_, i_) {

                            if (typeof v[v_] === undefined) {
                                // v[v_] = '';
                                html += '<td></td>';
                                return;
                            }

                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });

                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    // console.log(excel_data);
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = selectValue[rowId];
                        // row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            let customDuty = (json)=>{
                // console.log(json);return;
                url = json.url
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecompany";
                $("#action_name").html("custom tariff saving");
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var dutyfields = ['sn', 'sub_code', 'cet_code', 'description', 'su', 'duty', 'vat', 'levy', 'exc', 'dov'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    dutyfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);

                   excel_data =  Object.values(exceljson).filter((v)=>{
                        v['sub_code'] = String(v['cet_code']).substring(0, 2);
                        if(v['sub_code'] === '87'){
                            return v
                        }
                    })
                    // console.log(excel_data)
                    excel_data.map(function(v, i) {
                        
                        counter++;
                        // let page = String(v['page']).trim().toLowerCase();
                        v['sn'] = i;
                        html = '<tr id="'+i+'" class="row">';

                        dutyfields.forEach(function(v_, i_) {

                            if (typeof v[v_] === undefined) {
                                // v[v_] = '';
                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });

                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            let companyTable = (json)=>{
                url = json.url
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecompany";
                $("#action_name").html("company saving");
                let counter = 0;

                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return
                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var companyfields = ['sn', 'registered_date', 'company_code', 'company_name', 'username', 'contact', 'sys_user'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    companyfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        
                        counter++;
                        let page = String(v['page']).trim().toLowerCase();
                        let mid = "000000" + counter;
                        v['password'] = "Soa1tJj94/" + counter;
                        let mkt = sysUser[systemUser] ;
                        // console.log(mkt);
                        v['sys_user'] = mkt;
                        v["submit_by"] = v['sys_user'];
                        v["company_type"] = "Insurance";
                        v['address'] = "LAGOS";
                        v['country'] = "Nigeria";
                        v['phone'] = "09876654565";
                        v['sn'] = i;
                        v['rowIndex'] = i
                        // v['registered_date'] =  moment(v['start_date'], 'D-MMM-YY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['registered_date'] =  moment(v['start_date'], 'YYYY-MM-DD').format('D-MMM-YY');
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear();
                        
                        let monthYear = month +""+ fullYear;
                        
                        let company_code = 'CMP/' + (page.toUpperCase()) + mid.slice(-6) + "/" + monthYear;
                        // console.log(company_code)
                        let insurer = v['insurer'];

                        if(insurer === null || insurer === undefined){
                            insurer = '';
                        }else{
                            insurer = String(v['insurer']??'').trim().toLowerCase();

                        }
                       
                        if(insurersObj[insurer] === undefined ){
                            insurersObj[insurer] = company_code;
                            v['company_code'] = company_code;
                        } 
                         else{
                            v['company_code'] = insurersObj[insurer];
                        }

                        v['contact'] = insurer;
                        let email_insurer = insurer.substring(0, insurer.indexOf(" "));
                        if(email_insurer == ''){
                            v['username'] = insurer + page + counter + '@gmail.com';

                        }else{
                          v['username'] = email_insurer + page + counter + '@gmail.com';
                        }
                        // v['username'] =  + counter + '@gmail.com';
                        v['company_name'] = insurer.toUpperCase();
                        
                        html = '<tr id="'+i+'" class="row">';
                        companyfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            let brokersTable = (json)=>{
                url = json.url;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                $("#action_name").html("Brokers saving");
                let counter = 0;
                let fields = null;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var brokerfields = ['sn', 'registered_date', 'broker_company_code', 'broker_company_name'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    brokerfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        
                        counter++;
                        let page = String(v['page']).trim().toLowerCase();
                        let mid = "000000" + counter;
                        v['password'] = "Soa1tJj94/" + counter;
                        let sys_user = String(v['sys_user']).trim().toLowerCase();
                        if(sys_user == null || sys_user == '' || sys_user == undefined){
                            sys_user = String('Michael').toLowerCase();
                        }
                        let mkt = sysUser[sys_user] ;
                        if(mkt == null || mkt == '' || mkt == undefined){
                            mkt = sysUser[String('Michael').toLowerCase()];
                        }
                        v['sys_user'] = mkt;

                        v["submit_by"] = v['sys_user'];
                        v["company_type"] = "Brokerage";
                        v['address'] = "LAGOS";
                        v['country'] = "Nigeria";
                        v['phone'] = "09876654565";
                        v['sn'] = i;
                        v['rowIndex'] = i
                        // v['registered_date'] =  moment(v['start_date'], 'D-MMM-YY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['registered_date'] =  moment(v['start_date'], 'YYYY-MM-DD').format('D-MMM-YY');
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;
                        let company_code = 'BRK/' +  (page.toUpperCase()) + mid.slice(-6) + "/" + monthYear;
                        
                        let broker_company_name = v['broker_name'];
                        if(broker_company_name === null || broker_company_name === undefined){
                            broker_company_name = '';
                        }else{
                            broker_company_name = String(v['broker_name']??'').trim().toLowerCase();

                        }
                       
                        if(brokersObj[broker_company_name] === undefined && broker_company_name !== ''){
                            brokersObj[broker_company_name] = company_code;
                            v['broker_company_code'] = company_code;
                        } 
                         else{
                            v['broker_company_code'] = brokersObj[broker_company_name] ?? '';
                        }

                        let email_broker = broker_company_name.substring(0, broker_company_name.indexOf(" "));
                        if(email_broker == ''){
                            v['username'] = broker_company_name + page + counter + '@gmail.com';

                        }else{
                          v['username'] = email_broker +  counter + '@gmail.com';
                        }
                        // v['username'] =  + counter + '@gmail.com';
                        v['broker_company_name'] = broker_company_name.toUpperCase();
                        v['broker_company_contact'] = broker_company_name.toUpperCase();
                        // v['broker_company_name'] = broker_company_name;
                        
                        html = '<tr id="'+i+'" class="row">';
                        brokerfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = "saveBroker";
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }
   
            let subriskTable = (json)=>{
                url = json.url
                // console.log(exceljson);return;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savesubrisk";
                $("#action_name").html("subrisk saving");
                let counter = 0;
                // let fields = null;
                // if(exceljson.length > 0){
                //     fields = Object.keys(exceljson[0]);
                // }
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let subriskfields = ['sn', 'registered_date', 'subrisk_code', 'subrisk_name', 'risk_code', 'risk_name', 'alpha', 'digit'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    subriskfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        counter++;
                        let page = String(v['page']).trim();
                        v['registered_date'] =  moment(v['start_date'], 'YYYY-MM-DD').format('D-MMM-YY');
                        // v['registered_date'] =  moment(v['start_date'], 'D-MMM-YY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        let date = new Date(v['registered_date'])
                        let month = date.getMonth()+1;

                        let mid = "000" + counter + month;

                        let mkt = sysUser[systemUser] ;
                        v['sys_user'] = mkt;
                        v["submit_by"] = v['sys_user'];
                        v["modified_by"] = v['sys_user'];
                        v['rowIndex'] = i;
                        v['sn'] = i;
                        let subrisk_code = 'S'+  (page.toUpperCase()) + mid.slice(-3);
                        
                        let subrisk_name = v['subrisk_name'];
                        if(subrisk_name === null || subrisk_name === undefined){
                            subrisk_name = '';

                        }else{
                            subrisk_name = String(v['subrisk_name']).trim().toLowerCase();

                        }
                        let risk_name = v['risk_name'];
                        if(risk_name === null || risk_name === undefined){
                            risk_name = '';
                        }else{
                            risk_name = String(v['risk_name']).trim().toLowerCase();

                        }
                        let risk_code = '';
                        if(subriskObj[subrisk_name] === undefined && subrisk_name !== '' && risk_name !== '' ){
                            risk_code = '';
                            if(risk_name === 'aviation' ){
                                risk_code = 'A'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'motor' ){
                                risk_code = 'V'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'general accident' || risk_name === 'liability'){
                                risk_code = 'G'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'fire' ){
                                risk_code = 'F'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'life' ){
                                risk_code = 'L'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'marine' || risk_name === 'marine cargo' ){
                                risk_code = 'M'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'travel' ){
                                risk_code = 'T'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'agriculture' || risk_name === 'agric' ){
                                risk_code = 'R'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'engineering' ){
                                risk_code = 'E'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'credit life' ){
                                risk_code = 'C'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'bond' || risk_name === 'bonds' ){
                                risk_code = 'B'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'oil and gas' ){
                                risk_code = 'O'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'marine hull' ){
                                risk_code = 'H'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            if(risk_name === 'travel' ){
                                risk_code = 'T'
                                v['alpha'] = subrisk_name.substring(0, 3)
                            }
                            v['risk_code'] = risk_code
                            v['subrisk_code'] = subrisk_code;
                            let digit = mid.slice(-3);;
                            v['digit'] = digit
                            subriskObj[subrisk_name] = {"subrisk_code": subrisk_code, "risk_code": risk_code, 'digit': digit, 'alpha':v['alpha']};

                        } else if(subrisk_name !== ''){
                            v['subrisk_code'] = subriskObj[subrisk_name]['subrisk_code'];
                            v['risk_code'] = subriskObj[subrisk_name]['risk_code'];
                            v['alpha'] = subriskObj[subrisk_name]['alpha']
                            v['digit'] = subriskObj[subrisk_name]['digit'];
                        }

                        v['subrisk_name'] = String(subrisk_name).toUpperCase();
                        if(v['subrisk_name'] === null || v['subrisk_name'] === undefined){
                            v['subrisk_name'] = '';
                        }

                        if(v['alpha'] === null || v['alpha'] === undefined){
                            v['alpha'] = '';
                        }

                        if(v['risk_code'] === null || v['risk_code'] === undefined){
                            v['risk_code'] = '';
                        }
                        
                        if(v['digit'] === null || v['digit'] === undefined){
                            v['digit'] = '';
                        }
                        if(v['subrisk_code'] === null || v['subrisk_code'] === undefined){
                            v['subrisk_code'] = '';
                        }

                        v['risk_name'] = String(risk_name).toUpperCase();
                        // v['alpha'] = v['alpha'] === null ? "scared" : v['alpha'];
                        html = '<tr id="'+i+'" class="row">';
                        subriskfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            let act_account = (json)=>{
                url = json.url;
                // console.log(url);return;
                // let url = 'http://localhost/migration/Account.php';
                // console.log(json);return;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "accounts";
                $("#action_name").html("accounts");
                let counter = 0;
                // let fields = null;
                // if(exceljson.length > 0){
                //     fields = Object.keys(exceljson[0]);
                // }
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";
                    return
                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let accountfields = ['sn', 'account_code', 'account_name', 'group_name', 'group_code'];
                
                setTimeout(function() {
                    let html = '<tr disabled>';
                    accountfields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    // return
                    let group_codes = [];
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        let g_name = String(v.group_name).toLowerCase();
                        let code = act_group[g_name];
                        let sn = i + 1;
                        v.sn= sn;
                        v.group_code = code;
                        if(group_codes.includes(code)){
                            return v;
                        }
                        group_codes.push(code);
                        return v;
                    })

                    group_codes.forEach(function(v, i){
                        counter = 0;
                        
                        excel_data.map(function(vv, i) {
                            // return
                            if(vv.group_code === v){
                                counter++;
                                let mid = "000" + counter;
                                vv.account_code = vv.group_code + ""+ mid.slice(-3);
                            }

                        })
                    })
 
                    excel_data.map(function(v, i) {
                        
                        html = '<tr id="'+i+'" class="row">';
                        accountfields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                    })

                    // console.log(excel_data)
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(current)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            let act_gledger = (json)=>{  
                url = json.url
                // let url = 'http://localhost/migration/Act_gledger.php';              // console.log(json);return;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "act_gledger";
                $("#action_name").html("ledger");
                let counter = 0;
                // let fields = null;
                // if(exceljson.length > 0){
                //     fields = Object.keys(exceljson[0]);
                // }
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let ledgerFields = ['sn','account_code', 'account_name', 'debit', 'credit']
                // 'trans_code', 'trans_type', 'ref_code', 'branch_code', 'trans_date', 'trans_detail', 'beneficiary', 'currency_code', 'currency_rate', 'submit_by', 'modified_by', 'approved_by'];

                setTimeout(function() {
                    let html = '<tr disabled>';
                    ledgerFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        counter++;
                        v['rowNumber'] = i;
                        v['sn'] = v['rowNumber'];
                        v['trans_date'] =  "2025-12-31";
                        v['trans_code'] =  "2025-CLOSE-OPR";
                        v['trans_type'] =  "JNL";
                        v['ref_code'] =  "CLOSE25";
                        v['branch_code'] =  "LAG/01/001";
                        v['trans_detail'] =  "2025 CLOSING ADJUSTMENT";
                        v['beneficiary'] =  "";
                        v['currency_code'] =  "NGN";
                        v['currency_rate'] =  "1";
                        v['submit_by'] =  "isaac@safamdigital.com";
                        // v['modified_by'] =  "isaac@safamdigital.com";
                        // v['approved_by'] =  "isaac@safamdigital.com";

                        let account_name = String(v['account_name']??'').trim().toLowerCase();
                        v['account_code'] =  accounts[account_name];
                        v['account_name'] = String(v['account_name']??'').trim();

                        html = '<tr id="'+i+'" class="row">';
                        ledgerFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    })
                    
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = action;
                        // console.log(row);return;
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(current)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                });
            }

            //client table
            let  clientsTable = (json)=> {
                url = json.url
                // let url = 'http://localhost/migration/Client.php';
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "saveClient";
                $("#action_name").html("Clients");
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                //clean the table
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                var clientFields = ['sn', 'client_code', 'title', 'client_name', 'agent_code', 'submit_by'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    clientFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    //
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        let insured = String(v['insured'] ?? '').trim().toLowerCase();
                        v['rowIndex'] = i;
                        v['sn'] = i;
                        let page = String(v['page']).trim().toLowerCase();
                        counter++;
                        // v['registered_date'] =  moment(v['start_date'], 'D-MMM-YY').format('YYYY-MM-DD');
                        // v['registered_date'] =  moment(v['trans_date'], 'D-MMM-YY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;

                        let mid = "00000" + counter;
                        v['username'] = 'busagclient.' + page + monthYear + i + '@gmail.com';
                        v['business'] = 'Corporate';
                        let agent_code = ((v['agent_name'] ?? '').toLowerCase() == '' || (v['agent_name'] ?? '').toLowerCase() == undefined) ? 'direct' : v['agent_name'];
                        v['agent_code'] = agents[agent_code]??''
                        let client_code =  'CL/TR/'+  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear;
                        if(clients[insured] === undefined ){
                            clients[insured] = client_code;
                            v['client_code'] = client_code;

                        }  else{
                            v['client_code'] = clients[insured];
                        }

                        // if(((v['business'] ?? '').trim()) !== 'Corporate'){
                        //    let names = insured.trim().split(' ')
                        //     v['first_name'] = names[0] ?? '';
                        //     v['last_name'] = names[1] ?? '';
                        //     v['middle_name'] = names[2] ?? '';
                        //     v['business'] = v['business'] ?? 'Individual';
                        //     v['id_type'] = 'NATIONAL_ID_CARD';
                        //     v['id_number'] = '123' + i;
                        //     v['client_name'] = v['title'] + " " + v['first_name'] + " " + v['last_name'];

                        //     if((v['title'] ?? '') === 'Mr.' || (v['title'] ?? '') === 'Bar.' || (v['title'] ?? '') === 'Alhaji'){
                        //         v['gender'] = "Male";
                        //         v['marital_status'] = 'Married';
                        //     }else if((v['title'] ?? '') === "Mrs."){
                        //         v['gender'] = 'Female';
                        //         v['marital_status'] = 'Married';
                        //     }else if((v['title'] ?? '') === "Miss."){
                        //         v['gender'] = 'Female';
                        //         v['marital_status'] = 'Single';
                        //     }
                            
                        // }else{
                        //     v['first_name'] = insured.toUpperCase();
                        //     v['middle_name'] = '';
                        //     v['last_name'] =  insured.toUpperCase();
                        //     v['title'] = "Mr.";
                        //     v['marital_status'] = "Single";
                        //     v['gender'] = "Male";
                        //     v['id_type'] = 'CAC_NUMBER';
                        //     v['nin'] = '123456';
                        //     v['bvn_number'] = '567890';
                        //     v['id_number'] = '123' + i;
                        //     v['client_name'] =  insured.toUpperCase();
                        // }
                        v['business'] = business;
                        v['first_name'] = insured.toUpperCase();
                        v['middle_name'] = '';
                        v['last_name'] =  insured.toUpperCase();
                        // v['title'] = "Mr.";
                        // v['marital_status'] = "Single";
                        // v['gender'] = "Male";
                        v['id_type'] = 'CAC_NUMBER';
                        v['nin'] = '123456';
                        v['bvn_number'] = '567890';
                        v['id_number'] = '123' + i;
                        v['client_name'] =  insured.toUpperCase();

                        let mkt = sysUser[systemUser] ;
                        v['sys_user'] = mkt;

                        v['address'] = 'LAGOS';
                        v['phone'] = '345678765';
                        // v['religion'] = 'CHRISTIANITY';
                        v['occupation'] = 'Businesses and financial';
                        v["title"] = v["title"] ?? '';
                        v['state'] = 'FCT';
                        v['country'] = 'NIGERIA';
                        v['sector'] = 'private';
                        v['username2'] = v['sys_user'];
                        v['birth_date'] = moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');

                        v['submit_by'] = v['sys_user'];
                        v['submit_on'] =  v['start_date'];
                        v['modified_by'] = v['sys_user'];
                        v['modified_on'] = v['start_date'];
                        v['registered_date'] = v['start_date'];
                        // v['sn'] = v['rowIndex'];
                        // exceljson[i] = v;

                        html = '<tr id="'+i+'" class="row">';
                        clientFields.forEach(function(v_, i_) { 
                            //
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td id="'+v_+'">' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        //
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'saveClient';
                        // console.log(row)
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // console.log(data.td_cell)
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    current.find(data.td_cell).css({
                                        'color': 'blue',fontSize: "18px"
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);

            }

            //policy
            let policyTable = (json) =>{
                url = json.url
                // let url = 'http://localhost/migration/Policy.php';
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                // action = "autopolicy";
                $("#action_name").html("Policy");
                $(json.result + "> thead").find('tr').remove();
                $(json.result + "> tbody").find('tr').remove();
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }

                let policyFields = ['sn', 'policy_code', 'insured', 'subrisk_name', 'insurer', 'ppn', 'gross_premium', 'commission', 'broker_name', 'broker_prop'];

                setTimeout(function() {
                    let html = '<tr disabled>';
                    policyFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result +" > thead").append(html);
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        v['sn'] = i;
                        v['rowIndex'] = i;
                        let page = String(v['page']).trim();
                        let subrisk_name = String(v['subrisk_name'] ?? '').trim().toLowerCase();
                        let insured = String(v['insured'] ?? '').trim().toLowerCase();
                        v['branch_code'] = 'LAG/01/001';
                        v['agent_code'] = 'A/20/000003';

                        // v['trans_date'] =  moment(v['start_date'], 'YYYY-MM-DD').format('D-MMM-YY');
                        v['trans_date'] =  v['start_date'];
                        let date = new Date(v['start_date']);
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;

                        let mkt = sysUser[systemUser] ;
                        v['sys_user'] = mkt;

                        // v['trans_date'] =  moment(v['start_date'], 'D-MMM-YY').format('YYYY-MM-DD') ?? moment(new Date().toLocaleDateString(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                        v['approved_by'] = v['sys_user'];
                        
                        v['submit_by'] = v['sys_user'];
                        v['submit_on'] =  v['start_date'];
                        v['modified_by'] = v['sys_user'];
                        v['modified_on'] = v['start_date'];
                        let policy_code ='';

                        if(String(v['policy_code']).trim() === "TBA"){
                            // policy_code = "TBA"+  (page.toUpperCase()) + i + monthYear;
                            v['policy_code'] =  "TBA"+  (page.toUpperCase()) + i + monthYear;

                        }
                        else if(v['policy_code'] == undefined){
                            v['policy_code'] = '';
                        }


                        // if((v['policy_code'] ?? '') == "" || v['policy_code'] == undefined || v['policy_code'] == "TBA") {
                            
                        //     policy_code = "TBA"+  (page.toUpperCase()) + i + monthYear;
                        // }else{
                        //     let pol = policies[v['policy_code']] ?? '';
                        //     if(pol !== ''){
                        //         policy_code = v['policy_code'] + page + i;

                        //     }else{
                        //         policy_code = v['policy_code']

                        //     }
                        // }
                        
                        v['subrisk_code'] = (subriskObj[subrisk_name] ?? {})['subrisk_code'] ?? '';
                        v['risk_code'] = (subriskObj[subrisk_name] ?? {})['risk_code']??'' ;
                        v['client_code'] = (clients[insured]);
                        v['client_name'] = String(v['insured']).trim().toUpperCase() 

                        // if(policies[policy_code] === undefined ){
                        //     policies[policy_code] = policy_code;
                        //     v['policy_code'] = policy_code;

                        // }else{
                        //     v['policy_code'] = policies[policy_code];
                        // }

                        if(v['subrisk_name'] === null || v['subrisk_name'] === undefined){
                            v['subrisk_name'] = '';
                        }
                        if(v['insured'] === null || v['insured'] === undefined){
                            v['insured'] = '';
                        }
                        html = '<tr id="'+i+'" class="row">';
                        policyFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + (v[v_]) + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        
                        return v;
                    });
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = 'savePolicy';
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                
                                // console.log(current);
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })
                }, 1000);
            }

            //debit
            let debitTable = (json) =>{
                url = json.url
                // let url = 'http://localhost/migration/Debit.php';
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0;
                action = "autodebit";
                $("#action_name").html("Debit");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return
                }
                // INSERT
                let debitFields = ['sn', 'policy_code', 'trans_date', 'start_date', 'end_date','debit_code', 'ref_code', 'insured', 'subrisk_name', 'insurer', 'ppn', 'sum_insured', 'gross_premium', 'commission', 'broker_name', 'broker_prop' ];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    //first = false;
                    excel_data = Object.values(exceljson).map(function(v, i) {
                        v['sn'] = i;
                        v['rowIndex'] = i;
                        let subrisk_name = String(v['subrisk_name']).toLowerCase().trim();
                        let insured = String(v['insured']).toLowerCase().trim();
                        let insurer = String(v['insurer']).toLowerCase().trim();
                        
                        // let policy_code = String(v['policy_code']).toLowerCase();
                        v['risk_code'] = (subriskObj[subrisk_name]?? '')['risk_code'] ?? '';
                        v['subrisk_code'] = (subriskObj[subrisk_name]??'')['subrisk_code']??'';
                        v['company_code'] = (insurersObj[insurer]??'');
                        v['client_code'] = (clients[insured]??'');
                        v['branch_code'] = branchCode;
                        v['agent_code'] = agentCode;
                        v['ledger'] = postToLedger;
                        v['currency_code'] = currencyCode;
                        v['currency_rate'] = currencyRate;
                        
                        let mkt = sysUser[systemUser] ;
                        v['sys_user'] = mkt;
                        
                        v['submit_by'] = v['sys_user'] ;
                        v['submit_on'] =  v['start_date'];
                        v['modified_by'] = v['sys_user'] ;
                        v['modified_on'] = v['start_date'];
                        v['username2'] = v['sys_user'] ;

                        v['agent_prop'] = '100';
                        v['approved_by'] =  v['sys_user'] ;
                        v['trans_mode'] = 'Transfer';

                        let end_date = v['end_date'];
                        if(end_date === null || end_date === '' || end_date === undefined){
                            // end_date = moment()
                            v['end_date'] = moment(end_date).add(1, 'y').format("YYYY-MM-DD"); 
                        }

                        counter++;
                        v['trans_date'] = v['start_date'];
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;

                        let mid = "000000" + counter;
                        
                        let page = String(v['page']).trim();
                        
                        if(String(v['policy_code']).trim() === "TBA"){
                            // policy_code = "TBA"+  (page.toUpperCase()) + i + monthYear;
                            v['policy_code'] =  "TBA"+  (page.toUpperCase()) + i + monthYear;

                        }
                        else 
                            if(v['policy_code'] == undefined){
                            v['policy_code'] = '';
                        }

                        let debit_code = ('DN/' + branchAbbreviation + '/' +  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear);

                        v['debit_code'] =  ((v['debit_code'] ?? '') == '' || v['debit_code'] == 'TBA' || v['debit_code'] == undefined) ? debit_code : v['debit_code'];
                        if(v['sum_insured'] == null || v['sum_insured'] == '' || v['sum_insured'] == undefined){
                            v['sum_insured'] = 0;
                        }
                        let sum_insured_ = parseFloat(v['sum_insured']);

                        if(v['gross_premium'] == null || v['gross_premium'] == '' || v['gross_premium'] == undefined){
                            v['gross_premium'] = 0;
                        }
                        let gross_prem = parseFloat(v['gross_premium']);
                        
                        if(v['commission'] == null || v['commission'] == '' || v['commission'] == undefined){
                            v['commission'] = 0;
                        }
                        let com = parseFloat(v['commission']);
                        let vat = parseFloat(v['vat'] ?? '');
                        
                        // v['bus_prop'] = v['ppn'] === null ? 0 : v['ppn'] * 100;

                        if(sum_insured_ <= 0 && gross_prem > 0 ){
                            sum_insured_ = (gross_prem * 5);
                            v['sum_insured'] = sum_insured_;
                        }

                        if(sum_insured_ > 0 && gross_prem > 0){
                            v['gross_premium'] = gross_prem;
                            v['premium_rate'] = gross_prem / sum_insured_ * 100;
                        }else{
                            v['premium_rate'] = 0;
                        }

                        if(com > 0 && gross_prem > 0){
                            v['commission'] = com;
                            v['com_rate'] = com / gross_prem * 100;
                        }else{
                            v['com_rate'] = 0;
                        }
                        if(v['gross_premium'] === null || v['gross_premium'] === undefined){
                            v['gross_premium'] = 0
                        }
                        
                        v['vat_rate'] = 7.5;
                        html = '<tr id="'+i+'" class="row">';
                        //
                        debitFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td id="'+v_+'">' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });

                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        row['func'] = 'savedebit';
                        if (rowId >= 0) {
                            $.post(url, row, function(data) {
                                // console.log(data);
                                
                                // if(data.last_dn){
                                excel_data[rowId].ref_code = data.ref_code;
                                    // console.log(excel_data[rowId])
                                // }
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                current.find(data.td_cell).html(data.ref_code);
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                    
                                    current.find(data.td_cell).css({
                                        color:"blue", fontSize: "12px"
                                    })
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);
            }

            //credit
            let creditTable = (json) =>{
                url = json.url
                // let url = 'http://localhost/migration/Credit.php';
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "autocredit";
                $("#action_name").html("Credit");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }
                // INSERT
                 let creditFields =  ['sn', 'ref_code', 'policy_code', 'insured', 'subrisk_name', 'insurer', 'credit_code', 'bus_prop', 'company_code'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    creditFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });

                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    excel_data = excel_data.map(function(v, i) {

                        let insurer = String(v['insurer']??'').toLowerCase().trim();
                        if(v == undefined || insurer == ''){v['insurer'] = ''}
                        counter++;
                        
                        let page = String(v['page']).trim();
                        v['trans_date'] = v['start_date'];
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;

                        let mid = "000000" + counter;
                        let credit_code =  'CN/'+ branchAbbreviation + '/'+  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear;
                        
                        v['credit_code'] = credit_code;
                        v['bus_type'] = 'INS';
                        // v['bus_prop'] = (v['ppn'] === null || v['ppn'] === undefined || v['ppn'] === '') ? 0 : v['ppn'] * 100;
                        v['bus_prop'] = insurerProp === 'decimal' ? (v['insurer_prop'] * 100) : v['insurer_prop'];
                        
                        v['status'] = '1';
                        let company_code = insurersObj[insurer] ?? '';
                        v['company_code'] = company_code;
                        v['ledger'] = postToLedger;
                    
                        html = '<tr id="'+i+'" class="row">';
                        creditFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = 'savecredit';
                        // console.log(row);return;
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }

                    })

                }, 1000);
            }

            //credit
            let coBrokerTable = (json) =>{
                url = json.url
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savecoBroker";
                $("#action_name").html("Credit");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }
                // INSERT
                let fields = ['sn', 'broker_company_code', 'ref_code', 'insured', 'subrisk_name', 'insurer', 'ppn', 'gross_premium', 'commission', 'broker_name', 'broker_prop'];

                setTimeout(function() {

                    let html = '<tr disabled>';
                    fields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });

                    html += '</tr>';
                    $(json.result + " > thead").append(html);
                    excel_data = excel_data.map(function(v, i) {

                        let broker_name = String(v['broker_name']??'').toLowerCase().trim();
                        if(v == undefined || broker_name == '' || broker_name == null){v['broker_name'] = ''}
                        counter++;
                        
                        let page = String(v['page']).trim();
                        v['trans_date'] = v['start_date'];
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear();
                        
                        let monthYear = month +""+ fullYear;

                        let mid = "000000" + counter;
                        let credit_code =  'BRK/RA/'+  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear; 
                        v['broker_credit_code'] = credit_code;
                        v['bus_type'] = 'INS';
                        v['broker_prop'] = (v['broker_prop'] === null || v['broker_prop'] === undefined || v['broker_prop'] === '') ? 0 : v['broker_prop'] * 100;
                        v['status'] = '1';
                        let broker_code = brokersObj[broker_name];
                        v['broker_company_code'] = broker_code ?? '';
                        v['broker_company_name'] = broker_name.toUpperCase();

                        html = '<tr id="'+i+'" class="row">';
                        fields.forEach(function(v_, i_) {
                            if (typeof v[v_] === undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = 'savecoBroker';
                        // console.log(row);
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                // if(data.action === 'debit'){
                                //     excel_data[index].ref_code = data.ref_code ?? '';
                                //     current.find(data.td_cell).html(data.ref_code ?? '');
                                // }
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }

                    })

                }, 1000);
            }

            //receipt
            let receiptTable = (json) =>{
                url = json.url;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0
                action = "savereceipt";
                $("#action_name").html("Receipt");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }
                // INSERT
                let debitFields = ['sn', 'debit_code', 'ref_code', 'receipt_code', 'policy_code', 'insured', 'subrisk_name', 'subrisk_code'];
                
                setTimeout(function() {

                    let html = '<tr disabled>';
                    debitFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);

                    excel_data = excel_data.map(function(v, i) {
                        v['sn'] = i;
                        v['rowIndex'] = i;
                        let subrisk_name = String(v['subrisk_name']).toLowerCase().trim();
                        let insured = String(v['insured']).toLowerCase().trim();
                        v['risk_code'] = (subriskObj[subrisk_name]?? '')['risk_code'] ?? '';
                        v['subrisk_code'] = (subriskObj[subrisk_name]??'')['subrisk_code']??'';
                        v['client_code'] = (clients[insured]??'');
                        v['client_name'] = String(v['insured']).toUpperCase().trim();
                        v['subrisk_name'] = String(v['subrisk_name']).toUpperCase().trim();
                    
                        counter++;

                        v['trans_date'] = v['start_date'];
                        let page = String(v['page']).trim();
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;

                        let mid = "000000" + counter;
                        let receipt_code = 'RCP/' + branchAbbreviation + '/' +  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear;
                        receipt_code =  (v['receipt_code'] == 'TBA' || (v['receipt_code'] ?? '') == '' || v['receipt_code'] == undefined) ? receipt_code : v['receipt_code'];
                        v['receipt_code'] = receipt_code;
                        //////////////////////////////////////////////////////////////////////////////////
                        v['amt_received'] = ((v['amount_received'] ?? '') == '' || v['amount_received'] == undefined) ? v['gross_premium'] : v['amount_received'] ;
                        v['branch_code'] = branchCode;
                        v['agent_code'] = agentCode;
                        v['ledger'] = postToLedger;
                        
                        v['submit_by'] = receipt_by;
                        v['submit_on'] =  v['start_date'];
                        v['modified_by'] = receipt_by;
                        v['modified_on'] = v['start_date'];
                        v['bus_type'] = "RCP";
                       v['bank_description'] =  (v['bank_description'] === null || v['bank_description'] === undefined) ? "BEING PREMIUM RECEIVED" : v['bank_description']
                       v['gross_premium'] =  (v['gross_premium'] === null || v['gross_premium'] === undefined) ? 0 : v['gross_premium'];
                        //////////////////////////////////////////////////////////////////////////
                        html = '<tr id="'+i+'" class="row">';
                        debitFields.forEach(function(v_, i_) {
                            if (typeof v[v_] == undefined) {

                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data)
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = excel_data[rowId];
                        // row['func'] = 'savereceipt';
                        // console.log(row.ref_code);

                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                // console.log(data);
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);

            }

            //payment
            let paymentTable = (json) => {
                url = json.url;
                reset({});
                document.querySelector('#saved').innerText = 0;
                document.querySelector('#alreadyExist').innerText = 0;
                action = "savepayment";
                $("#action_name").html("Payment");
                $(json.result + " > thead").find('tr').remove();
                $(json.result + " > tbody").find('tr').remove();
                let counter = 0;
                
                if(exceljson.length > 0){
                    document.getElementById("process_btn").innerHTML = json.action + "";
                    // fields = Object.keys(exceljson[0]);
                }else{
                    document.getElementById("process_btn").innerHTML = "Empty Data";return

                }
                // INSERT
                let paymentFields = ['sn', 'payment_code', 'policy_code', 'insured', 'subrisk_name', 'insurer', 'credit_code', 'ppn', 'gross_premium', 'commission'];
                
                setTimeout(function() {

                    let html = '<tr disabled>';
                    paymentFields.forEach(function(v_, i_) {
                        html += '<td><strong>' + v_ + '</strong></td>';
                    });
                    html += '</tr>';
                    $(json.result + " > thead").append(html);

                    excel_data = excel_data.map(function(v, i) { 
                        // v['sn'] = v['rowNumber']
                        let insurer = String(v['company_name']??'').toLowerCase();
                        if(v === undefined || insurer === ''){v['company_name'] = 'NO COMPANY NAME'}
                        counter++;

                        let page = String(v['page']).trim();
                        v['trans_date'] = v['start_date'];
                        let date = new Date(v['start_date'])
                        let month = date.getMonth() + 1;
                        let fullYear = date.getFullYear()
                        
                        let monthYear = month +""+ fullYear;
                        let mid = "000000" + counter;
                        let payment_code =  'P/' + branchAbbreviation + '/' +  (page.toUpperCase()) + mid.slice(-6) + '/' + monthYear;
                        v['payment_code'] = payment_code;

                        v['bus_type'] = "PYM";
                        
                        v['submit_by'] = receipt_by;
                        v['submit_on'] =  v['start_date'];
                        v['modified_by'] = receipt_by;
                        v['ledger'] = postToLedger;
                        v['credit_account'] = remittanceAccount;

                        html = '<tr id="'+i+'" class="row">';
                        paymentFields.forEach(function(v_, i_) {
                            if (typeof v[v_] === "undefined") {
                                html += '<td></td>';
                                return;
                            }
                            html += '<td>' + v[v_] + '</td>';
                            $('#meta').html(i);

                        });
                        html += '</tr>';
                        $(json.result + " > tbody").append(html);
                        return v;
                    });
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'savepayment';
                        // console.log(row);return;
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                // console.log(data)
                                // let current = $('#result > tbody').find('tr:eq(' + row['rowNumber'] + ')');
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);

            }

            let correct_start_end_date = (json)=>{
                url = json.url
                let fields = ['SN', 'date', 'doc_number','policy_code', 'client_name', 'start_date', 'end_date', 'subclass', 'class', 'premium', 'commission', 'prev_earned', 'prev_earned', 'curr_earned', 'next_earned' ];
                
                setTimeout(function() {

                    // let html = '<tr disabled>';
                    // fields.forEach(function(v_, i_) {
                    //     html += '<td><strong>' + v_ + '</strong></td>';
                    // });
                    // html += '</tr>';
                    // $(json.result + " > thead").append(html);
                    // let html_div = $("#sqlUpdate");
                    if(excel_data.length > 0){
                        document.getElementById("process_btn").innerHTML = json.action + " Saving";
                        // fields = Object.keys(exceljson[0]);
                    }      
                    let sql = '';
                    excel_data = exceljson.map(function(v, i) { 
                        v['SN'] = v['__rowNum__']
                        // let date = moment(v['start_date'], 'DD/MM/YYYY').format('YYYY-MM-DD')
                        // console.log(date)
                        // sql += "UPDATE tec_policy_debit SET" + " trans_date='" + v['start_date'] + "' WHERE " + "debit_code='" +  v['doc_number'] + "' LIMIT 1;" + "<br/>";
                        sql += "UPDATE tec_policy_debit SET" + " trans_date='" + v['start_date'] + "', " + " start_date='" + v['start_date'] + "', " + "end_date='" +  v['end_date'] + "' WHERE " + "debit_code='" +  v['doc_number'] + "' LIMIT 1;" + "<br/>";
                        
                        // html = '<tr id="'+i+'" class="row">';
                        // fields.forEach(function(v_, i_) {
                        //     if (typeof v[v_] === "undefined") {
                        //         html += '<td></td>';
                        //         return;
                        //     }
                        //     html += '<td>' + v[v_] + '</td>';
                        //     $('#meta').html(i);

                        // });
                        // html += '</tr>';
                        // $(json.result + " > tbody").append(html);
                        return v;
                    });
                    $("#sqlUpdate").html(sql)
                    // $(json.result + " > tbody").append(html);
                    // console.log(excel_data);
                    //
                    document.querySelector('#result > tbody').addEventListener('click', (event) => {
                        let row = {};
                        let elem = event.target.closest('tr');
                        let rowId = elem.id;
                        row = exceljson[rowId];
                        row['func'] = 'autopayment';
                        if (rowId >= 0) {

                            $.post(url, row, function(data) {
                                // console.log(data)
                                // let current = $('#result > tbody').find('tr:eq(' + row['rowNumber'] + ')');
                                let current = $('#result > tbody').find('tr:eq(' + rowId + ')');
                                //
                                if (data.status) {
                                    current.css({
                                        'background-color': '#c4ffbd'
                                    });
                                } else if (data.message == 0 || data.status == false) {
                                    current.css({
                                        'background-color': 'rgb(247, 182, 179)'
                                    });
                                }
                            }, 'JSON');
                        }
                    })

                }, 1000);

            }

            // import file
            let importexcel = (event, json) =>{
                //
                reset({});
                
                let regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xlsx|.xls)$/;
                /*Checks whether the file is a valid excel file*/
                if (regex.test($(json.excelfile).val().toLowerCase())) {
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

                            if (xlsxflag) {
                                exceljson = XLSX.utils.sheet_to_json(workbook.Sheets["busag_2026"]);
                                console.log(exceljson);
                            } else {
                                exceljson = XLS.utils.sheet_to_row_object_array(workbook.Sheets["busag_2026"]);
                                console.log(exceljson);
                            }
                        }
                        if (xlsxflag) {
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

            let body_len = 0;
            let processload2 = (e) => {
                let elem = e.target.checked;
                keys = Object.keys(excel_data);
                // console.log(keys.length)
                if(keys.length <= 0)return;
                savedCount = 0
                alreadyExist = 0;
                document.querySelector('#alreadyExist').innerText = alreadyExist;
                document.querySelector('#saved').innerText = savedCount
                let action_html = document.getElementById("process_btn").innerHTML;
                document.getElementById("process_btn").innerHTML = '';
                document.getElementById("process_btn").innerHTML = action_html + "...";
                // console.log("keys")
                if(elem === true){
                    dataUpload({})
                    // console.log("scared")
                }
                
            }

            let dataUpload = (json) => {

                if (keys.length > 0) {
                    // let url = url
                    let index = keys.shift();
                    let row = excel_data[index];
      
                    let current = $('#result > tbody').find('tr:eq(' + index + ')'); 
                    if($("#process").prop("checked") === true){

                        $.post(url, row, function(data) {
                            if(data.action === 'debit'){
                                excel_data[index].ref_code = data.ref_code ?? '';
                                current.find(data.td_cell).html(data.ref_code ?? '');
                            }
                            // console.log(excel_data[index]);
                            if (data.status) {
                                savedCount++;
                                document.querySelector('#saved').innerText = savedCount;
                                current.css({
                                    'background-color': '#c4ffbd'
                                });
                                // scroll
                                // if ($('#scroll').prop('checked'))
                                // $('html,body').animate({
                                //     scrollTop: current.position().top
                                // }, 0.5);
                                // //next
                                dataUpload({});
                                
                            } else {
                                alreadyExist++;
                                document.querySelector('#alreadyExist').innerText = alreadyExist;
                                current.css({
                                    'background-color': '#bdffff'
                                });
                                // // scroll
                                // if ($('#scroll').prop('checked'))
                                // $('html,body').animate({
                                //     scrollTop: current.position().top
                                // }, 0.5);
                                //next
                                dataUpload({});
                            }
                        }, 'JSON');

                    }

                }else{
                    reset({});
                }
            }

            // reset
            let reset = (json) => {
                $('#process').prop({
                    'checked': false
                });
                // $('#scroll').prop({
                //     'checked': true
                // });
                savedCount = 0
                alreadyExist = 0;
            }

            let select_file = ()=>{
                const anchorElement = document.getElementById('file');
                anchorElement.click();
            }

            $(function($) {
                reset({});
            });
        </script>
</html>