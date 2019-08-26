<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

use Illuminate\Support\Facades\Input;


class TimesheetController extends Controller
{

    // Download Current Period Salaried Timesheet PDF
    public function timesheetDownload(Request $request) {

        $timesheetData = collect([
            'name' => $request->name,
            'month' => $request->month,
            'year' => $request->year,
            'first' => $request->first,
            'second' => $request->second,
            'third' => $request->third,
            'fourth' => $request->fourth,
            'fifth' => $request->fifth,
            'sixth' => $request->sixth,
            'seventh' => $request->seventh,
            'eighth' => $request->eighth,
            'ninth' => $request->ninth,
            'tenth' => $request->tenth,
            'eleventh' => $request->eleventh,
            'twelfth' => $request->twelfth,
            'thirteenth' => $request->thirteenth,
            'fourteenth' => $request->fourteenth,
            'fifteenth' => $request->fifteenth,
            'sixteenth' => $request->sixteenth,
            'seventeenth' => $request->seventeenth,
            'eighteenth' => $request->eighteenth,
            'nineteenth' => $request->nineteenth,
            'twentieth' => $request->twentieth,
            'twenty_first' => $request->twenty_first,
            'twenty_second' => $request->twenty_second,
            'twenty_third' => $request->twenty_third,
            'twenty_fourth' => $request->twenty_fourth,
            'twenty_fifth' => $request->twenty_fifth,
            'twenty_sixth' => $request->twenty_sixth,
            'twenty_seventh' => $request->twenty_seventh,
            'twenty_eighth' => $request->twenty_eighth,
            'twenty_ninth' => $request->twenty_ninth,
            'thirtieth' => $request->thirtieth,
            'thirty_first' => $request->thirty_first,
            'other_absence_explain' => $request->other_absence_explain

        ]);

            view()->share('timesheetData',$timesheetData);
            $pdf = SnappyPdf::loadView('timesheet-pdf')->setOption('encoding', 'utf-8')->setPaper('A4', 'landscape');
            // download PDF
            return $pdf->download('timesheet.pdf');
    }



    public function timesheetStream(Request $request) {

        $timesheetData = collect([
            'name' => $request->name,
            'month' => $request->month,
            'year' => $request->year,
            'first' => $request->first,
            'second' => $request->second,
            'third' => $request->third,
            'fourth' => $request->fourth,
            'fifth' => $request->fifth,
            'sixth' => $request->sixth,
            'seventh' => $request->seventh,
            'eighth' => $request->eighth,
            'ninth' => $request->ninth,
            'tenth' => $request->tenth,
            'eleventh' => $request->eleventh,
            'twelfth' => $request->twelfth,
            'thirteenth' => $request->thirteenth,
            'fourteenth' => $request->fourteenth,
            'fifteenth' => $request->fifteenth,
            'sixteenth' => $request->sixteenth,
            'seventeenth' => $request->seventeenth,
            'eighteenth' => $request->eighteenth,
            'nineteenth' => $request->nineteenth,
            'twentieth' => $request->twentieth,
            'twenty_first' => $request->twenty_first,
            'twenty_second' => $request->twenty_second,
            'twenty_third' => $request->twenty_third,
            'twenty_fourth' => $request->twenty_fourth,
            'twenty_fifth' => $request->twenty_fifth,
            'twenty_sixth' => $request->twenty_sixth,
            'twenty_seventh' => $request->twenty_seventh,
            'twenty_eighth' => $request->twenty_eighth,
            'twenty_ninth' => $request->twenty_ninth,
            'thirtieth' => $request->thirtieth,
            'thirty_first' => $request->thirty_first,
            'other_absence_explain' => $request->other_absence_explain


        ]);

        view()->share('timesheetData',$timesheetData);

            $pdf = SnappyPdf::loadView('timesheet-pdf')->setPaper('A4', 'landscape');
            // download pdf
            return $pdf->stream('timesheet.pdf');

    }


    // hourly timesheet hourly pdf generation action:
    public function timesheetHourlyDownload(Request $request) {

    //this is the UNDRY way of doing this for demo purposes...
        $total_sick = 0;
        $total_vacay = 0;
        $total_holiday = 0;
        $total_worked = 0;

        $days_arr = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh',
            'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth', 'thirteenth', 'fourteenth', 'fifteenth',
            'sixteenth', 'seventeenth', 'eighteenth', 'nineteenth', 'twentieth', 'twenty_first',
            'twenty_second', 'twenty_third', 'twenty_fourth', 'twenty_fifth', 'twenty_sixth', 'twenty_seventh',
            'twenty_eighth', 'twenty_ninth', 'thirtieth', 'thirty_first'
        ];

        // iterate through each named day ($days_arr) and calculate worked, sick, vacation, and holiday hours:
        foreach($days_arr as $day) {

            if($request->$day == 'S') {
                $temp_val = $day.'_hours';
                $work_temp_val = $day.'_sick_worked';
                $total_sick += $request->$temp_val;
                $total_worked += $request->$work_temp_val;

            }

            elseif($request->$day == 'V') {
                $temp_val = $day.'_hours';
                $work_temp_val = $day.'_vaca_worked';
                $total_vacay += $request->$temp_val;
                $total_worked += $request->$work_temp_val;
            }

            elseif($request->$day == 'H') {
                $temp_val = $day.'_hours';
                $total_holiday += $request->$temp_val;

            }

            elseif($request->$day == 'X') {
                $temp_val = $day.'_hours';
                $total_worked += $request->$temp_val;
            }

        }


        $total_hours = (

            //total worked hours...
            $request->first_hours +
            $request->second_hours +
            $request->third_hours +
            $request->fourth_hours +
            $request->fifth_hours +
            $request->sixth_hours +
            $request->seventh_hours +
            $request->eighth_hours +
            $request->ninth_hours +
            $request->tenth_hours +
            $request->eleventh_hours +
            $request->twelfth_hours +
            $request->thirteenth_hours +
            $request->fourteenth_hours +
            $request->fifteenth_hours +
            $request->sixteenth_hours +
            $request->seventeenth_hours +
            $request->eighteenth_hours +
            $request->nineteenth_hours +
            $request->twentieth_hours +
            $request->twenty_first_hours +
            $request->twenty_second_hours +
            $request->twenty_third_hours +
            $request->twenty_fourth_hours +
            $request->twenty_fifth_hours +
            $request->twenty_sixth_hours +
            $request->twenty_seventh_hours +
            $request->twenty_eighth_hours +
            $request->twenty_ninth_hours +
            $request->thirtieth_hours +
            $request->thirty_first_hours +

            //total sick worked (if applicable)...
            $request->first_sick_worked +
            $request->second_sick_worked +
            $request->third_sick_worked +
            $request->fourth_sick_worked +
            $request->fifth_sick_worked +
            $request->sixth_sick_worked +
            $request->seventh_sick_worked +
            $request->eighth_sick_worked +
            $request->ninth_sick_worked +
            $request->tenth_sick_worked +
            $request->eleventh_sick_worked +
            $request->twelfth_sick_worked +
            $request->thirteenth_sick_worked +
            $request->fourteenth_sick_worked +
            $request->fifteenth_sick_worked +
            $request->sixteenth_sick_worked +
            $request->seventeenth_sick_worked +
            $request->eighteenth_sick_worked +
            $request->nineteenth_sick_worked +
            $request->twentieth_sick_worked +
            $request->twenty_first_sick_worked +
            $request->twenty_second_sick_worked +
            $request->twenty_third_sick_worked +
            $request->twenty_fourth_sick_worked +
            $request->twenty_fifth_sick_worked +
            $request->twenty_sixth_sick_worked +
            $request->twenty_seventh_sick_worked +
            $request->twenty_eighth_sick_worked +
            $request->twenty_ninth_sick_worked +
            $request->thirtieth_sick_worked +
            $request->thirty_first_sick_worked +

            //total vaca worked (if applicable)...
            $request->first_vaca_worked +
            $request->second_vaca_worked +
            $request->third_vaca_worked +
            $request->fourth_vaca_worked +
            $request->fifth_vaca_worked +
            $request->sixth_vaca_worked +
            $request->seventh_vaca_worked +
            $request->eighth_vaca_worked +
            $request->ninth_vaca_worked +
            $request->tenth_vaca_worked +
            $request->eleventh_vaca_worked +
            $request->twelfth_vaca_worked +
            $request->thirteenth_vaca_worked +
            $request->fourteenth_vaca_worked +
            $request->fifteenth_vaca_worked +
            $request->sixteenth_vaca_worked +
            $request->seventeenth_vaca_worked +
            $request->eighteenth_vaca_worked +
            $request->nineteenth_vaca_worked +
            $request->twentieth_vaca_worked +
            $request->twenty_first_vaca_worked +
            $request->twenty_second_vaca_worked +
            $request->twenty_third_vaca_worked +
            $request->twenty_fourth_vaca_worked +
            $request->twenty_fifth_vaca_worked +
            $request->twenty_sixth_vaca_worked +
            $request->twenty_seventh_vaca_worked +
            $request->twenty_eighth_vaca_worked +
            $request->twenty_ninth_vaca_worked +
            $request->thirtieth_vaca_worked +
            $request->thirty_first_vaca_worked

        );

        // create collection so that we can call each individual date, and type of employed day var within the PDF:
        $timesheetData = collect([

            'name' => $request->name,
            'month' => $request->month,
            'year' => $request->year,

            'first' => $request->first,
            'first_hours' => $request->first_hours,
            'first_sick_worked' => $request->first_sick_worked,
            'first_vaca_worked' => $request->first_vaca_worked,

            'second' => $request->second,
            'second_hours' => $request->second_hours,
            'second_sick_worked' => $request->second_sick_worked,
            'second_vaca_worked' => $request->second_vaca_worked,

            'third' => $request->third,
            'third_hours' => $request->third_hours,
            'third_sick_worked' => $request->third_sick_worked,
            'third_vaca_worked' => $request->third_vaca_worked,

            'fourth' => $request->fourth,
            'fourth_hours' => $request->fourth_hours,
            'fourth_sick_worked' => $request->fourth_sick_worked,
            'fourth_vaca_worked' => $request->fourth_vaca_worked,

            'fifth' => $request->fifth,
            'fifth_hours' => $request->fifth_hours,
            'fifth_sick_worked' => $request->fifth_sick_worked,
            'fifth_vaca_worked' => $request->fifth_vaca_worked,

            'sixth' => $request->sixth,
            'sixth_hours' => $request->sixth_hours,
            'sixth_sick_worked' => $request->sixth_sick_worked,
            'sixth_vaca_worked' => $request->sixth_vaca_worked,

            'seventh' => $request->seventh,
            'seventh_hours' => $request->seventh_hours,
            'seventh_sick_worked' => $request->seventh_sick_worked,
            'seventh_vaca_worked' => $request->seventh_vaca_worked,

            'eighth' => $request->eighth,
            'eighth_hours' => $request->eighth_hours,
            'eighth_sick_worked' => $request->eighth_sick_worked,
            'eighth_vaca_worked' => $request->eighth_vaca_worked,

            'ninth' => $request->ninth,
            'ninth_hours' => $request->ninth_hours,
            'ninth_sick_worked' => $request->ninth_sick_worked,
            'ninth_vaca_worked' => $request->ninth_vaca_worked,

            'tenth' => $request->tenth,
            'tenth_hours' => $request->tenth_hours,
            'tenth_sick_worked' => $request->tenth_sick_worked,
            'tenth_vaca_worked' => $request->tenth_vaca_worked,

            'eleventh' => $request->eleventh,
            'eleventh_hours' => $request->eleventh_hours,
            'eleventh_sick_worked' => $request->eleventh_sick_worked,
            'eleventh_vaca_worked' => $request->eleventh_vaca_worked,

            'twelfth' => $request->twelfth,
            'twelfth_hours' => $request->twelfth_hours,
            'twelfth_sick_worked' => $request->twelfth_sick_worked,
            'twelfth_vaca_worked' => $request->twelfth_vaca_worked,

            'thirteenth' => $request->thirteenth,
            'thirteenth_hours' => $request->thirteenth_hours,
            'thirteenth_sick_worked' => $request->thirteenth_sick_worked,
            'thirteenth_vaca_worked' => $request->thirteenth_vaca_worked,

            'fourteenth' => $request->fourteenth,
            'fourteenth_hours' => $request->fourteenth_hours,
            'fourteenth_sick_worked' => $request->fourteenth_sick_worked,
            'fourteenth_vaca_worked' => $request->fourteenth_vaca_worked,

            'fifteenth' => $request->fifteenth,
            'fifteenth_hours' => $request->fifteenth_hours,
            'fifteenth_sick_worked' => $request->fifteenth_sick_worked,
            'fifteenth_vaca_worked' => $request->fifteenth_vaca_worked,

            'sixteenth' => $request->sixteenth,
            'sixteenth_hours' => $request->sixteenth_hours,
            'sixteenth_sick_worked' => $request->sixteenth_sick_worked,
            'sixteenth_vaca_worked' => $request->sixteenth_vaca_worked,

            'seventeenth' => $request->seventeenth,
            'seventeenth_hours' => $request->seventeenth_hours,
            'seventeenth_sick_worked' => $request->seventeenth_sick_worked,
            'seventeenth_vaca_worked' => $request->seventeenth_vaca_worked,

            'eighteenth' => $request->eighteenth,
            'eighteenth_hours' => $request->eighteenth_hours,
            'eighteenth_sick_worked' => $request->eighteenth_sick_worked,
            'eighteenth_vaca_worked' => $request->eighteenth_vaca_worked,

            'nineteenth' => $request->nineteenth,
            'nineteenth_hours' => $request->nineteenth_hours,
            'nineteenth_sick_worked' => $request->nineteenth_sick_worked,
            'nineteenth_vaca_worked' => $request->nineteenth_vaca_worked,

            'twentieth' => $request->twentieth,
            'twentieth_hours' => $request->twentieth_hours,
            'twentieth_sick_worked' => $request->twentieth_sick_worked,
            'twentieth_vaca_worked' => $request->twentieth_vaca_worked,

            'twenty_first' => $request->twenty_first,
            'twenty_first_hours' => $request->twenty_first_hours,
            'twenty_first_sick_worked' => $request->twenty_first_sick_worked,
            'twenty_first_vaca_worked' => $request->twenty_first_vaca_worked,

            'twenty_second' => $request->twenty_second,
            'twenty_second_hours' => $request->twenty_second_hours,
            'twenty_second_sick_worked' => $request->twenty_second_sick_worked,
            'twenty_second_vaca_worked' => $request->twenty_second_vaca_worked,

            'twenty_third' => $request->twenty_third,
            'twenty_third_hours' => $request->twenty_third_hours,
            'twenty_third_sick_worked' => $request->twenty_third_sick_worked,
            'twenty_third_vaca_worked' => $request->twenty_third_vaca_worked,

            'twenty_fourth' => $request->twenty_fourth,
            'twenty_fourth_hours' => $request->twenty_fourth_hours,
            'twenty_fourth_sick_worked' => $request->twenty_fourth_sick_worked,
            'twenty_fourth_vaca_worked' => $request->twenty_fourth_vaca_worked,

            'twenty_fifth' => $request->twenty_fifth,
            'twenty_fifth_hours' => $request->twenty_fifth_hours,
            'twenty_fifth_sick_worked' => $request->twenty_fifth_sick_worked,
            'twenty_fifth_vaca_worked' => $request->twenty_fifth_vaca_worked,

            'twenty_sixth' => $request->twenty_sixth,
            'twenty_sixth_hours' => $request->twenty_sixth_hours,
            'twenty_sixth_sick_worked' => $request->twenty_sixth_sick_worked,
            'twenty_sixth_vaca_worked' => $request->twenty_sixth_vaca_worked,

            'twenty_seventh' => $request->twenty_seventh,
            'twenty_seventh_hours' => $request->twenty_seventh_hours,
            'twenty_seventh_sick_worked' => $request->twenty_seventh_sick_worked,
            'twenty_seventh_vaca_worked' => $request->twenty_seventh_vaca_worked,

            'twenty_eighth' => $request->twenty_eighth,
            'twenty_eighth_hours' => $request->twenty_eighth_hours,
            'twenty_eighth_sick_worked' => $request->twenty_eighth_sick_worked,
            'twenty_eighth_vaca_worked' => $request->twenty_eighth_vaca_worked,

            'twenty_ninth' => $request->twenty_ninth,
            'twenty_ninth_hours' => $request->twenty_ninth_hours,
            'twenty_ninth_sick_worked' => $request->twenty_ninth_sick_worked,
            'twenty_ninth_vaca_worked' => $request->twenty_ninth_vaca_worked,

            'thirtieth' => $request->thirtieth,
            'thirtieth_hours' => $request->thirtieth_hours,
            'thirtieth_sick_worked' => $request->thirtieth_sick_worked,
            'thirtieth_vaca_worked' => $request->thirtieth_vaca_worked,

            'thirty_first' => $request->thirty_first,
            'thirty_first_hours' => $request->thirty_first_hours,
            'thirty_first_sick_worked' => $request->thirty_first_sick_worked,
            'thirty_first_vaca_worked' => $request->thirty_first_vaca_worked,

            'other_absence_explain' => $request->other_absence_explain,
            'total_hours' => $total_hours,
            'total_worked' => $total_worked,
            'total_sick' => $total_sick,
            'total_vacay' => $total_vacay,
            'total_holiday' => $total_holiday

        ]);

        //share the timesheet data with the PDF view:
        view()->share('timesheetData',$timesheetData);

        $pdf = SnappyPdf::loadView('timesheet-hourly-pdf')->setOption('encoding', 'utf-8')->setPaper('A4', 'landscape');
        // download PDF
        return $pdf->download('hourly-timesheet.pdf');

    }


    //salaried calendar view
    public function salaryCalendar()
    {
        return view('calendar-entry');
    }


    //hourly calendar view
    public function hourlyCalendar()
    {
        return view('hourly-calendar-entry');
    }


    // Download Calendar Salaried Timesheet PDF
    public function timesheetCalDownload(Request $request) {

        //this is the DRY version for demo purposes....

        //declare empty timesheetData collection
        $timesheetData = collect([]);

        //grab request array keys:
        $keysArr = (array_keys($request->all()));

        //iterate through keysArr array and store each key and corresponding request value into the timesheetData collection
        foreach($keysArr as $key){

            $timesheetData[$key] = $request->$key;
        }

        //share timesheetData collection with PDF view template and generate PDF
        view()->share('timesheetData',$timesheetData);
        $pdf = SnappyPdf::loadView('cal-pdf')->setOption('encoding', 'utf-8')->setPaper('A4', 'landscape');
        // download PDF
        return $pdf->download('timesheet.pdf');
    }



    // Download Calendar Hourly Timesheet PDF
    public function timesheetHourlyCalDownload(Request $request) {

        //this is the DRYer version of the hourly timesheet for demo purposes...
        $total_sick = 0;
        $total_vacay = 0;
        $total_holiday = 0;
        $total_worked = 0;
        $total_hours = 0;

        //declare empty timesheetData collection
        $timesheetData = collect([]);

        //declare empty calRequestData collection to grab each calendar request for calculation
        $calRequestKeys = collect([]);

        //grab request array keys:
        $keysArr = (array_keys($request->all()));

        foreach($keysArr as $key){
            //store each key and corresponding request value into timesheetData collection
            $timesheetData[$key] = $request->$key;

            //store all request keys to the calRequestKeys array that contain 'cal_'
            if (strpos($key, 'cal_') !== false) {

                $calRequestKeys->push($key);
            }

        }

        //iterate through each named day ($calRequestData) and calculate worked, sick, vacation, and holiday hours:
        foreach($calRequestKeys as $day) {

            if($timesheetData[$day] == 'S') {
                $temp_val = $day.'_hours';
                $work_temp_val = $day.'_sick_worked';
                $total_sick += $timesheetData[$temp_val];
                $total_worked += $timesheetData[$work_temp_val];
            }

            elseif($timesheetData[$day] == 'V') {
                $temp_val = $day.'_hours';
                $work_temp_val = $day.'_vaca_worked';
                $total_vacay += $timesheetData[$temp_val];
                $total_worked += $timesheetData[$work_temp_val];
            }

            elseif($timesheetData[$day] == 'H') {
                $temp_val = $day.'_hours';
                $total_holiday += $timesheetData[$temp_val];
                $total_hours += $total_holiday;
            }

            elseif($timesheetData[$day] == 'X') {
                $temp_val = $day.'_hours';
                $total_worked += $timesheetData[$temp_val];
            }
                                            }
        //calculate total hours from total_sick, total_vacay, total_holiday, and total_worked
        $total_hours = ($total_sick + $total_vacay + $total_holiday + $total_worked);

        //append total_hours, total_worked, total_sick, total_vacay, and total_holiday to the timesheetData collection
        $timesheetData['total_hours'] = $total_hours;
        $timesheetData['total_worked'] = $total_worked;
        $timesheetData['total_sick'] = $total_sick;
        $timesheetData['total_vacay'] = $total_vacay;
        $timesheetData['total_holiday'] = $total_holiday;


        //share timesheetData collection with PDF view template and generate PDF
        view()->share('timesheetData',$timesheetData);
        $pdf = SnappyPdf::loadView('cal-pdf-hourly')->setOption('encoding', 'utf-8')->setPaper('A4', 'landscape');
        // download PDF
        return $pdf->download('timesheet.pdf');
    }


//265 to 46 for hourly calendar lines

//43 to 17 for salaried calendar lines
}
