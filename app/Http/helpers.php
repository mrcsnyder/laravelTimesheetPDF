<?php

//Calendar Salary Entry Helper Method
function salaryEntryCalendar( $month, $year){

   date_default_timezone_set('America/Los_Angeles');

    if(request()->route()->parameters != null) {
        $month = request()->route()->parameters['month'];
        $year = request()->route()->parameters['year'];
    }

    if (empty($month)) {
        $month = date('m');

    }
    if (empty($year)) {
        $year = date('Y');

    }
    //number of days integer
     $num_days=cal_days_in_month(CAL_GREGORIAN,$month,$year);

    //epoch seconds of first day of month
    $first_day_month = mktime(0,0,0, $month, 1, $year);

    //epoch seconds converted to first day of month
    $first=strftime('%w', $first_day_month);
    $wordy_month = strftime("%B", $first_day_month);
    $prev_month = $month -1;
    $prev_year= $year;
    if ($prev_month <= 0)
    {   $prev_month=12;
        $prev_year = $year-1;
    }
    $previous_month_link ="<a class='btn btn-secondary' href='/salary/calendar/$prev_month/$prev_year'><i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i> Previous Month</a>";
    $next_month = $month + 1;
    $next_year= $year;
    if ($next_month >= 13)
    {   $next_month=1;
        $next_year = $year+1;
    }
    $next_month ="<a class='btn btn-secondary' href='/salary/calendar/$next_month/$next_year'>Next Month <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></a>";


    $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat');

    $cal = '';
    $cal .= '<div id="calendar"><br/><br/><input name="hidemonth" type="hidden" value="'.$month.'"><input name="hideyear" type="hidden" value="'.$year.'">
    <h1 class="text-center verlag-bold timesheet-portal-header">'.$wordy_month .'&nbsp;'. $year. '</h1><br/><div id="calender_nav">'
    .$previous_month_link . str_repeat("&nbsp;", 50) . $next_month. '</div> <br/> <table class="table verlag-bold"><tr>';
    foreach($days as $days) { $cal.= '<th>'.$days.'</th>';
    }
    $cal.= '<tr>';
    $day=0;

    //second row - first week of the month
    while ($day < $first)
    {
        $cal.= '<td>'.'&nbsp;'.'</td>';
        $day++;
    }

    // Print the days of the week starting with 1
    $day=1;
    while ($day <= 7- $first) {
        $cal.= '<td>'. $day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    //Loop to do the in between rows
    $day= 7 - $first + 1;
    for ($count = 0 ; $count < 7; $count++)
    {    $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    $day = 7 - $first + 1 + 7;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    $day= 7 - $first + 1 + 14;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td>'.$day.' <select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
        $day++;
    }
    // Final loop to do the last row
    $cal.= '</tr><tr>';

    $day = 7 - $first + 1 + 21;

    while ($day <= $num_days){
        $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
        $day++;
        if ($day >=31 && $first >= 5){
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select></td>';
                $day++;
            }
        }
        if ($day >= 30 && $first >=6) {
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select> </td>';
                $day++;
            }
        }
    }
    $cal.= '</tr></table>';
    $cal.= '<br/>';

    echo $cal;

}


//Salary Calendar PDF Output Helper Method
function pdfCalendar( $month, $year, $timesheetData){

    if(request()->route()->parameters != null) {
        $month = request()->route()->parameters['month'];
        $year = request()->route()->parameters['year'];
    }

    if (empty($month)) {
        $month =date('m');

    }
    if (empty($year)) {
        $year=date('Y');
    }


    //number of days integer
    $num_days =date('t', mktime(0, 0, 0, $month, 1, $year));
    //epoch seconds of first day of month
    $first_day_month = mktime(0,0,0, $month, 1, $year);
    //epoch seconds converted to first day of month
    $first=strftime('%w', $first_day_month);
    $wordy_month = strftime("%B", $first_day_month);

    $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat');
    $cal='';
    $cal.='<div id="calendar"><h1 class="text-center verlag-bold timesheet-portal-header"><b>'.$wordy_month .'&nbsp;'. $year.'</b></h1>';
    $cal.=  '<table class="table verlag-bold"><tr>';

    foreach($days as $days) { $cal.= '<th>'.$days.'</th>';
    }

    # Second row - first week of the month
    $cal.= '<tr>';
    $day=0;
    while ($day < $first)
    {
        $cal.= '<td>'.'&nbsp;'.'</td>';
        $day++;
    }

    // Print the days of the week starting with 1
    $day=1;
    while ($day <= 7- $first) {
        $cal.= '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';


    //  Loop to do the in between rows
    $day= 7 - $first + 1;
    for ($count = 0 ; $count < 7; $count++)
    {    $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';
    $day = 7 - $first + 1 + 7;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    $day= 7 - $first + 1 + 14;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
        $day++;
    }
    //Final loop to do the last row
    $cal.= '</tr><tr>';

    $day = 7 - $first + 1 + 21;

    while ($day <= $num_days){
        $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
        $day++;
        if ($day >=31 && $first >= 5){
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
                $day++;
            }
        }
        if ($day >= 30 && $first >=6) {
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td><div class="day">&nbsp;'.$day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day].'</div></td>';
                $day++;
            }
        }
    }
    $cal.= '</tr></table></div>';


    echo $cal;

}




//Calendar Hourly Entry Helper Method
function hourlyEntryCalendar( $month, $year){

    date_default_timezone_set('America/Los_Angeles');
//    date_default_timezone_set('America/New_York');


    if(request()->route()->parameters != null) {
        $month = request()->route()->parameters['month'];
        $year = request()->route()->parameters['year'];
    }
//    $month = $_GET['month'];
//    $year = $_GET['year'];
    if (empty($month)) {
        $month =date('m');
//        $month = date('m H:i:s');

    }
    if (empty($year)) {
        $year=date('Y');
//        $year = date('Y H:i:s');
    }
//number of days integer
    $num_days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
    // $num_days =date('t', mktime(0, 0, 0, $month, 1, $year));
#$num_days=date('t');
#epoch seconds of first day of month
    $first_day_month = mktime(0,0,0, $month, 1, $year);
//epoch seconds converted to first day of month
    $first=strftime('%w', $first_day_month);
    $wordy_month = strftime("%B", $first_day_month);
    $prev_month = $month -1;
    $prev_year= $year;
    if ($prev_month <= 0)
    {   $prev_month=12;
        $prev_year = $year-1;
    }
    $previous_month_link ="<a class='btn btn-secondary' href='/hourly/calendar/$prev_month/$prev_year'><i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i> Previous Month</a>";
    $next_month = $month + 1;
    $next_year= $year;
    if ($next_month >= 13)
    {   $next_month=1;
        $next_year = $year+1;
    }
    $next_month ="<a class='btn btn-secondary' href='/hourly/calendar/$next_month/$next_year'>Next Month <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></a>";


    $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat');

    $cal='';

    $cal.='<div id="calendar"><br/><br/><input name="hidemonth" type="hidden" value="'.$month.'"><input name="hideyear" type="hidden" value="'.$year.'">';
    $cal.='<h1 class="text-center verlag-bold timesheet-portal-header">'.$wordy_month .'&nbsp;'. $year. '</h1><br/>';
    $cal.='<div id="calender_nav">'.$previous_month_link. str_repeat("&nbsp;", 50). $next_month .'</div><br/>';


    $cal.='<table class="table verlag-bold"><tr>';

    foreach($days as $days) { $cal.= '<th>'.$days.'</th>';
    }
    # Second row - first week of the month
    $cal.= '<tr>';
    $day=0;
    while ($day < $first)
    {
        $cal.= '<td>'.'&nbsp;'.'</td>';
        $day++;
    }

    // Print the days of the week starting with 1
    $day=1;
    while ($day <= 7- $first) {
        $cal.= '<td>'. $day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    //Loop to do the in between rows
    $day= 7 - $first + 1;
    for ($count = 0 ; $count < 7; $count++)
    {    $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    $day = 7 - $first + 1 + 7;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
        $day++;
    }
    $cal.= '</tr><tr>';

    $day= 7 - $first + 1 + 14;
    for ($count = 0 ; $count < 7; $count++)
    {
        $cal.= '<td>'.$day.' <select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
        $day++;
    }
    //    Final loop to do the last row
    $cal.= '</tr><tr>';

    $day = 7 - $first + 1 + 21;
    //
    while ($day <= $num_days){
        $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
        $day++;
        if ($day >=31 && $first >= 5){
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div></td>';
                $day++;
            }
        }
        if ($day >= 30 && $first >=6) {
            $cal.= "</tr>";
            while ($day <= $num_days) {
                $cal.= '<td>'.$day.'<select name="cal_'.$day.'" class="form-control" onchange="showSickWorked(this.value,this.getAttribute(\'name\'))"><option value="" selected="selected"></option><option value="X">X (Worked)</option><option value="V">V (Vacation)</option><option value="H">H (Holiday)</option><option value="S">S (Sick)</option><option value="B">B (Bereavement)</option><option value="J">J (Jury Duty)</option><option value="U">U (Unpaid Time Off)</option><option value="O">O (Other)</option></select><label>Hours: </label><input class="hours-input" min="0" type="number" name="cal_'.$day.'_hours"><div id="cal_'.$day.'_sick_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_sick_worked" class="hours-input" min="0" type="number"></div><div id="cal_'.$day.'_vaca_worked" style="display:none;">Hours Worked?<input name="cal_'.$day.'_vaca_worked" class="hours-input" min="0" type="number"></div> </td>';
                $day++;
            }
        }
    }
    $cal.= '</tr></table>';
    $cal.= '<br/>';

    echo $cal;

}



//Hourly Calendar PDF Output Helper Method
function pdfHourlyCalendar( $month, $year, $timesheetData){


    if(request()->route()->parameters != null) {
        $month = request()->route()->parameters['month'];
        $year = request()->route()->parameters['year'];
    }

    if (empty($month)) {
        $month =date('m');

    }
    if (empty($year)) {
        $year=date('Y');
    }


//number of days integer
    $num_days =date('t', mktime(0, 0, 0, $month, 1, $year));
//epoch seconds of first day of month
    $first_day_month = mktime(0,0,0, $month, 1, $year);
//epoch seconds converted to first day of month
    $first=strftime('%w', $first_day_month);
    $wordy_month = strftime("%B", $first_day_month);

    echo '<div id="calendar"><h1 class="text-center verlag-bold timesheet-portal-header"><b>'.$wordy_month .'&nbsp;'. $year. '</b></h1>';
    echo  '<table class="table verlag-bold"><tr>';
    $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat');
    foreach($days as $days) { echo '<th>'.$days.'</th>';
    }
    # Second row - first week of the month
    echo '<tr>';
    $day=0;
    while ($day < $first)
    {
        echo '<td>'.'&nbsp;'.'</td>';
        $day++;
    }
    // Print the days of the week starting with 1

    //if($timesheetData['cal_'.$day.'_sick_worked'] > 0) {echo $timesheetData['cal_'.$day.'_sick_worked'] .'X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. 'X';}'<br/>


    $day=1;
    while ($day <= 7- $first) {
        echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
        $day++;
    }
    echo '</tr><tr>';


    //  Loop to do the in between rows
    $day= 7 - $first + 1;
    for ($count = 0 ; $count < 7; $count++)
    {    echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
        $day++;
    }
    echo '</tr><tr>';


    $day = 7 - $first + 1 + 7;
    for ($count = 0 ; $count < 7; $count++)
    {
        echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
        $day++;
    }
    echo '</tr><tr>';



    $day= 7 - $first + 1 + 14;
    for ($count = 0 ; $count < 7; $count++)
    {
        echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
        $day++;
    }
    //    Final loop to do the last row
    echo '</tr><tr>';
    $day = 7 - $first + 1 + 21;
    //
    while ($day <= $num_days){
        echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
        $day++;
        if ($day >=31 && $first >= 5){
            echo "</tr>";
            while ($day <= $num_days) {
                echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
                $day++;
            }
        }
        if ($day >= 30 && $first >=6) {
            echo "</tr>";
            while ($day <= $num_days) {
                echo '<td><div class="day">&nbsp;'. $day.'</div><div class="work-status-td">'.$timesheetData['cal_'.$day.'_hours'].' '.$timesheetData['cal_'.$day].'</div><div class="work-status-td">';if($timesheetData['cal_'.$day.'_sick_worked'] > 0){echo $timesheetData['cal_'.$day.'_sick_worked'] .' X';} elseif($timesheetData['cal_'.$day.'_vaca_worked'] > 0) { echo $timesheetData['cal_'.$day.'_vaca_worked']. ' X';}'</div></td>';
                $day++;
            }
        }
    }
    echo '</tr></table></div>';

}


?>