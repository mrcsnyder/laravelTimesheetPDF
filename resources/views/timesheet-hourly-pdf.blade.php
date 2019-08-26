<!DOCTYPE html>
<html lang="en">
<title>Hourly Employee Timesheet PDF</title>
<head>

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

        table.key {
            border: 1px solid #000000;
        }
        table.key tr {
            /*border: 1px solid #000000;*/
        }

        table.key td {
            border: 1px solid #000000;
        }

        table.key th {
            /*border: 1px solid #000000;*/
        }

        table.timesheet-key {


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
            <span class="subheader-timesheet"><b>Hourly Timesheet</b></span>
        </div>
        <div class="col-large-6">
            <p class="signature"><span class="creds-timesheet">{{$timesheetData['name']}}</span></p>
            <b>Employee Name</b>

            <p class="signature"><span class="creds-timesheet">{{$timesheetData['month']}} {{$timesheetData['year']}}</span></p>
            <b>Month &amp; Year</b>
        </div>

    </div>
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
            <td> {{$timesheetData['first_hours']}} {{$timesheetData['first']}}<br/>@if($timesheetData['first_sick_worked'] > 0){{$timesheetData['first_sick_worked']}} X @elseif($timesheetData['first_vaca_worked'] > 0) {{$timesheetData['first_vaca_worked']}}  X @endif</td>
            <td> {{$timesheetData['second_hours']}} {{$timesheetData['second']}}<br/>@if($timesheetData['second_sick_worked'] > 0){{$timesheetData['second_sick_worked']}} X @elseif($timesheetData['second_vaca_worked'] > 0) {{$timesheetData['second_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['third_hours']}} {{$timesheetData['third']}}<br/>@if($timesheetData['third_sick_worked'] > 0){{$timesheetData['third_sick_worked']}} X @elseif($timesheetData['third_vaca_worked'] > 0) {{$timesheetData['third_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['fourth_hours']}} {{$timesheetData['fourth']}}<br/>@if($timesheetData['fourth_sick_worked'] > 0){{$timesheetData['fourth_sick_worked']}} X @elseif($timesheetData['fourth_vaca_worked'] > 0) {{$timesheetData['fourth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['fifth_hours']}} {{$timesheetData['fifth']}}<br/>@if($timesheetData['fifth_sick_worked'] > 0){{$timesheetData['fifth_sick_worked']}} X @elseif($timesheetData['fifth_vaca_worked'] > 0) {{$timesheetData['fifth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['sixth_hours']}} {{$timesheetData['sixth']}}<br/>@if($timesheetData['sixth_sick_worked'] > 0){{$timesheetData['sixth_sick_worked']}} X @elseif($timesheetData['sixth_vaca_worked'] > 0) {{$timesheetData['sixth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['seventh_hours']}} {{$timesheetData['seventh']}}<br/>@if($timesheetData['seventh_sick_worked'] > 0){{$timesheetData['seventh_sick_worked']}} X @elseif($timesheetData['seventh_vaca_worked'] > 0) {{$timesheetData['seventh_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['eighth_hours']}} {{$timesheetData['eighth']}}<br/>@if($timesheetData['eighth_sick_worked'] > 0){{$timesheetData['eighth_sick_worked']}} X @elseif($timesheetData['eighth_vaca_worked'] > 0) {{$timesheetData['eighth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['ninth_hours']}} {{$timesheetData['ninth']}}<br/>@if($timesheetData['ninth_sick_worked'] > 0){{$timesheetData['ninth_sick_worked']}} X @elseif($timesheetData['ninth_vaca_worked'] > 0) {{$timesheetData['ninth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['tenth_hours']}} {{$timesheetData['tenth']}}<br/>@if($timesheetData['tenth_sick_worked'] > 0){{$timesheetData['tenth_sick_worked']}} X @elseif($timesheetData['tenth_vaca_worked'] > 0) {{$timesheetData['tenth_vaca_worked']}} X @endif</td>
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
            <td> {{$timesheetData['eleventh_hours']}} {{$timesheetData['eleventh']}}<br/>@if($timesheetData['eleventh_sick_worked'] > 0){{$timesheetData['eleventh_sick_worked']}} X @elseif($timesheetData['eleventh_vaca_worked'] > 0) {{$timesheetData['eleventh_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twelfth_hours']}} {{$timesheetData['twelfth']}}<br/>@if($timesheetData['twelfth_sick_worked'] > 0){{$timesheetData['twelfth_sick_worked']}} X @elseif($timesheetData['twelfth_vaca_worked'] > 0) {{$timesheetData['twelfth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['thirteenth_hours']}} {{$timesheetData['thirteenth']}}<br/>@if($timesheetData['thirteenth_sick_worked'] > 0){{$timesheetData['thirteenth_sick_worked']}} X @elseif($timesheetData['thirteenth_vaca_worked'] > 0) {{$timesheetData['thirteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['fourteenth_hours']}} {{$timesheetData['fourteenth']}}<br/>@if($timesheetData['fourteenth_sick_worked'] > 0){{$timesheetData['fourteenth_sick_worked']}} X @elseif($timesheetData['fourteenth_vaca_worked'] > 0) {{$timesheetData['fourteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['fifteenth_hours']}} {{$timesheetData['fifteenth']}}<br/>@if($timesheetData['fifteenth_sick_worked'] > 0){{$timesheetData['fifteenth_sick_worked']}} X @elseif($timesheetData['fifteenth_vaca_worked'] > 0) {{$timesheetData['fifteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['sixteenth_hours']}} {{$timesheetData['sixteenth']}}<br/>@if($timesheetData['sixteenth_sick_worked'] > 0){{$timesheetData['sixteenth_sick_worked']}} X @elseif($timesheetData['sixteenth_vaca_worked'] > 0) {{$timesheetData['sixteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['seventeenth_hours']}} {{$timesheetData['seventeenth']}}<br/>@if($timesheetData['seventeenth_sick_worked'] > 0){{$timesheetData['seventeenth_sick_worked']}} X @elseif($timesheetData['seventeenth_vaca_worked'] > 0) {{$timesheetData['seventeenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['eighteenth_hours']}} {{$timesheetData['eighteenth']}}<br/>@if($timesheetData['eighteenth_sick_worked'] > 0){{$timesheetData['eighteenth_sick_worked']}} X @elseif($timesheetData['eighteenth_vaca_worked'] > 0) {{$timesheetData['eighteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['nineteenth_hours']}} {{$timesheetData['nineteenth']}}<br/>@if($timesheetData['nineteenth_sick_worked'] > 0){{$timesheetData['nineteenth_sick_worked']}} X @elseif($timesheetData['nineteenth_vaca_worked'] > 0) {{$timesheetData['nineteenth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twentieth_hours']}} {{$timesheetData['twentieth']}}<br/>@if($timesheetData['twentieth_sick_worked'] > 0){{$timesheetData['twentieth_sick_worked']}} X @elseif($timesheetData['twentieth_vaca_worked'] > 0) {{$timesheetData['twentieth_vaca_worked']}} X @endif</td>
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
            <td> {{$timesheetData['twenty_first_hours']}} {{$timesheetData['twenty_first']}} <br/>@if($timesheetData['twenty_first_sick_worked'] > 0){{$timesheetData['twenty_first_sick_worked']}} X @elseif($timesheetData['twenty_first_vaca_worked'] > 0) {{$timesheetData['twenty_first_vaca_worked']}} X @endif</td>
            <td>{{$timesheetData['twenty_second_hours']}} {{$timesheetData['twenty_second']}} <br/>@if($timesheetData['twenty_second_sick_worked'] > 0){{$timesheetData['twenty_second_sick_worked']}} X @elseif($timesheetData['twenty_second_vaca_worked'] > 0) {{$timesheetData['twenty_second_vaca_worked']}} X @endif</td>
            <td>{{$timesheetData['twenty_third_hours']}} {{$timesheetData['twenty_third']}} <br/>@if($timesheetData['twenty_third_sick_worked'] > 0){{$timesheetData['twenty_third_sick_worked']}} X @elseif($timesheetData['twenty_third_vaca_worked'] > 0) {{$timesheetData['twenty_third_vaca_worked']}} X @endif</td>
            <td>{{$timesheetData['twenty_fourth_hours']}} {{$timesheetData['twenty_fourth']}} <br/>@if($timesheetData['twenty_fourth_sick_worked'] > 0){{$timesheetData['twenty_fourth_sick_worked']}} X @elseif($timesheetData['twenty_fourth_vaca_worked'] > 0) {{$timesheetData['twenty_fourth_vaca_worked']}} X @endif</td>
            <td>{{$timesheetData['twenty_fifth_hours']}} {{$timesheetData['twenty_fifth']}}<br/>@if($timesheetData['twenty_fifth_sick_worked'] > 0){{$timesheetData['twenty_fifth_sick_worked']}} X @elseif($timesheetData['twenty_fifth_vaca_worked'] > 0) {{$timesheetData['twenty_fifth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twenty_sixth_hours']}} {{$timesheetData['twenty_sixth']}}<br/>@if($timesheetData['twenty_sixth_sick_worked'] > 0){{$timesheetData['twenty_sixth_sick_worked']}} X @elseif($timesheetData['twenty_sixth_vaca_worked'] > 0) {{$timesheetData['twenty_sixth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twenty_seventh_hours']}} {{$timesheetData['twenty_seventh']}}<br/>@if($timesheetData['twenty_seventh_sick_worked'] > 0){{$timesheetData['twenty_seventh_sick_worked']}} X @elseif($timesheetData['twenty_seventh_vaca_worked'] > 0) {{$timesheetData['twenty_seventh_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twenty_eighth_hours']}} {{$timesheetData['twenty_eighth']}}<br/>@if($timesheetData['twenty_eighth_sick_worked'] > 0){{$timesheetData['twenty_eighth_sick_worked']}} X @elseif($timesheetData['twenty_eighth_vaca_worked'] > 0) {{$timesheetData['twenty_eighth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['twenty_ninth_hours']}} {{$timesheetData['twenty_ninth']}}<br/>@if($timesheetData['twenty_ninth_sick_worked'] > 0){{$timesheetData['twenty_ninth_sick_worked']}} X @elseif($timesheetData['twenty_ninth_vaca_worked'] > 0) {{$timesheetData['twenty_ninth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['thirtieth_hours']}} {{$timesheetData['thirtieth']}}<br/>@if($timesheetData['thirtieth_sick_worked'] > 0){{$timesheetData['thirtieth_sick_worked']}} X @elseif($timesheetData['thirtieth_vaca_worked'] > 0) {{$timesheetData['thirtieth_vaca_worked']}} X @endif</td>
            <td> {{$timesheetData['thirty_first_hours']}} {{$timesheetData['thirty_first']}}<br/>@if($timesheetData['thirty_first_sick_worked'] > 0){{$timesheetData['thirty_first_sick_worked']}} X @elseif($timesheetData['thirty_first_vaca_worked'] > 0) {{$timesheetData['thirty_first_vaca_worked']}} X @endif</td>
        </tr>

    </table>


<table class="key text-center">
    <tr><th><b>Worked:</b></th><th><b>Sick:</b></th> <th><b>Vacation:</b></th><th><b>Holiday:</b></th><th><b>Total:</b></th></tr>
    <tr><td>{{$timesheetData['total_worked']}}</td><td>{{$timesheetData['total_sick']}}</td><td>{{$timesheetData['total_vacay']}}</td><td>{{$timesheetData['total_holiday']}}</td><td>{{$timesheetData['total_hours']}}</td></tr>

</table>

    <div class="row">

        <div class="col-large-12">

            <table class="timesheet-key mx-auto">
                <tr><td><h3><b>Key:</b></h3></td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>X</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>worked</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>B</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>bereavement</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>V</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>vacation</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>J</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>jury duty</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>H</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>holiday</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>U</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>unpaid time taken off</td></tr>
                <tr><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>S</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>sick</td><td>&nbsp;&nbsp;</td> <td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td><b>O</b> =</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td><td>other (please explain)</td><td><p class="signature-other">{{$timesheetData['other_absence_explain']}}</p></td></tr>
            </table>
        </div>
    </div>

    <h2><b>By signing below, I represent that this is an accurate accounting of my time for the designated month:</b></h2>
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