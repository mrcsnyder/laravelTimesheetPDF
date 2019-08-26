<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salaried Employee Timesheet PDF</title>

    <style>
        table.month-entry tr {
            border: 1px solid #000000;
            height: 41px;
        }
        table.month-entry td {
            border: 1px solid #000000;
        }

        table.month-entry th {
            border: 1px solid #000000;
            text-align:center;
            background-color: #A6A6A6;
            height:27px !important;
        }

        .spacer {
            height: 20px;
        }

        .signature {
            border: 0;
            border-bottom: 1px solid #000;
        }

        .signature-other {
            border: 0;
            border-bottom: 1px solid #000;
        }

        .timesheet-logo {
            height: 50px;
        }


        .row-timesheet {
            width: 1392px;
            height: 920px;
            margin-left: auto;
            margin-right: auto;
        }

        .table-secondary-plop {
            background-color: #A6A6A6;
        }


        table.table-bordered{
            border:1px solid #000000;
            margin-top:20px;
            font-weight:bolder;
        }
        table.table-bordered > thead > tr > th{
            border:1px solid #000000;

        }
        table.table-bordered > tbody > tr > td{
            border:1px solid #000000;
        }

        table.table-bordered {
            font-size: 1.2em;
            font-family: Arial;
        }

        table.timesheet-key {
            font-size: 1em;
            font-family: Arial;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }


        *, ::after, ::before {
            box-sizing: border-box;
        }

        .col-large-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }


        .col-large-6, .col-large-12 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }


        .col-large-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        table{border-collapse:collapse}
        table{width: 100%;}

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }


        .table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent}.table td,.table th{ height: 27px;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table .table{background-color:#fff}.table-sm td,.table-sm th{padding:.3rem}.table-bordered,.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{background-color:rgba(0,0,0,.075)}.table- primary>td,.table-primary,.table-primary>th{background-color:#b8daff}.table-hover .table-primary:hover,.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}. table-secondary>td,.table-secondary,.table-secondary>th{background-color:#d6d8db}.table- hover .table-secondary:hover,.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}. table-success>td,.table-success,.table-success>th{background-color:#c3e6cb}.table- hover .table-success:hover,.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table- info>td,.table-info,.table-info>th{background-color:#bee5eb}.table-hover .table-info:hover,.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table- warning>td,.table-warning,.table-warning>th{background-color:#ffeeba}.table-hover .table-warning:hover,.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table- danger>td,.table-danger,.table-danger>th{background-color:#f5c6cb}.table-hover .table-danger:hover,.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table- light>td,.table-light,.table-light>th{background-color:#fdfdfe}.table-hover .table-light:hover,.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-hover .table-dark:hover,.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table- active>td,.table- hover .table-active:hover,.table-active,.table-active>th,.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#212529;border-color:#32383e}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table- dark{color:#fff;background-color:#212529}.table-dark td,.table-dark th,.table-dark thead th{border-color:#32383e}.table-dark.table-bordered{border:0}.table-dark .table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark. table-hover tbody tr:hover{background-color:rgba(255,255,255,.075)}

        body {
            margin: 0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .text-center{
            text-align:center;
        }

        .subheader-timesheet {
            font-size: 1.3em;
        }

        .creds-timesheet {
            font-size: 1.3em;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="row">
        <div class="col-large-6">
            <h1>
                <img class="timesheet-logo" src="{{public_path()}}/images/logo.png" alt="Your Company Logo">
                &nbsp;Your Company Name</h1>
            <span class="subheader-timesheet"><b>Salaried Timesheet</b></span>
        </div>
        <div class="col-large-6">
            <p class="signature"><span class="creds-timesheet">{{$timesheetData['name']}}</span></p>
            <b>Employee Name</b>

            <p class="signature"><span class="creds-timesheet">{{$timesheetData['month']}} {{$timesheetData['year']}}</span></p>
            <b>Month &amp; Year</b>


        </div>

    </div>
    <br/>
    <br/>

    <table class="table table-bordered">

        <thead>
        <tr class="table-secondary-plop text-center">
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        </thead>
        <tr class="text-center">
            <td>{{$timesheetData['cal_1']}}</td>
            <td>{{$timesheetData['cal_2']}}</td>
            <td>{{$timesheetData['cal_3']}}</td>
            <td>{{$timesheetData['cal_4']}}</td>
            <td>{{$timesheetData['cal_5']}}</td>
            <td>{{$timesheetData['cal_6']}}</td>
            <td>{{$timesheetData['cal_7']}}</td>
            <td>{{$timesheetData['cal_8']}}</td>
            <td>{{$timesheetData['cal_9']}}</td>
            <td>{{$timesheetData['cal_10']}}</td>
        </tr>

        <tr class="spacer"></tr>
        <thead>
        <tr class="table-secondary-plop text-center">
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
        </tr>
        </thead>
        <tr class="text-center">
            <td>{{$timesheetData['cal_11']}}</td>
            <td>{{$timesheetData['cal_12']}}</td>
            <td>{{$timesheetData['cal_13']}}</td>
            <td>{{$timesheetData['cal_14']}}</td>
            <td>{{$timesheetData['cal_15']}}</td>
            <td>{{$timesheetData['cal_16']}}</td>
            <td>{{$timesheetData['cal_17']}}</td>
            <td>{{$timesheetData['cal_18']}}</td>
            <td>{{$timesheetData['cal_19']}}</td>
            <td>{{$timesheetData['cal_20']}}</td>
        </tr>

        <tr class="spacer"></tr>
        <thead>
        <tr class="table-secondary-plop text-center">
            <th>21</th>
            <th>22</th>
            <th>23</th>
            <th>24</th>
            <th>25</th>
            <th>26</th>
            <th>27</th>
            <th>28</th>
            <th>29</th>
            <th>30</th>
            <th>31</th>
        </tr>
        </thead>

        <tr class="text-center">
            <td>{{$timesheetData['cal_21']}}</td>
            <td>{{$timesheetData['cal_22']}}</td>
            <td>{{$timesheetData['cal_23']}}</td>
            <td>{{$timesheetData['cal_24']}}</td>
            <td>{{$timesheetData['cal_25']}}</td>
            <td>{{$timesheetData['cal_26']}}</td>
            <td>{{$timesheetData['cal_27']}}</td>
            <td>{{$timesheetData['cal_28']}}</td>
            <td>{{$timesheetData['cal_29']}}</td>
            <td>{{$timesheetData['cal_30']}}</td>
            <td>{{$timesheetData['cal_31']}}</td>
        </tr>

    </table>
    <br/>
    <br/>

    <div class="row">

        <div class="col-large-12">

            <table class="timesheet-key mx-auto">
                <tr><td><b>Key:</b></td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>X</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>worked</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>B</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>bereavement</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>V</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>vacation</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>J</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>jury duty</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>H</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>holiday</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>U</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>unpaid time taken off</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>S</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>sick</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>O</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>other (please explain)&nbsp; </td><td><p class="signature-other">{{$timesheetData['other_absence_explain']}}</p></td></tr>
            </table>




        </div>


    </div>

    <br/>
    <br/>
    <h2><b>By signing below, I represent that this is an accurate accounting of my time for the designated month:</b></h2>

    <br/>
    <br/>
    <br/>
    <br/>

    <div class="row">

        <div class="col-large-6">
            <p class="signature"></p>
            <b>Employee Signature</b>

        </div>

        <div class="col-large-6">
            <p class="signature"></p>
            <b>Date</b>
        </div>
    </div>



</div>

</body>
</html>