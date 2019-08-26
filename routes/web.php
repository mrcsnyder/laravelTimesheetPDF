<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('timesheet-portal');
});

Route::get('/salary', function () {
    return view('timesheet-entry');
});

Route::get('/hourly', function () {
    return view('timesheet-entry-hourly');
});


// POST Salaried Timesheet entry data to TimesheetController
Route::post('/timesheet-poster', 'TimesheetController@timesheetDownload')
    ->name('timesheet-poster');

// POST Hourly Timesheet entry data to TimesheetController
Route::post('/timesheet-hourly-poster', 'TimesheetController@timesheetHourlyDownload')
    ->name('timesheet-hourly-poster');


//view Timesheet PDF without downloading for better testing/layout enhancement...
Route::get('stream-timesheet-pdf', 'TimesheetController@timesheetStream')->name('stream-timesheet-pdf');


//salaried calendar routes
Route::get('/salary/calendar/{month?}/{year?}', ['as' => '/salary/calendar', 'uses' => 'TimesheetController@salaryCalendar']);


// POST Salaried Calendar entry data to TimesheetController
Route::post('/timesheet-poster-cal', 'TimesheetController@timesheetCalDownload')
    ->name('timesheet-poster-cal');


//hourly calendar routes:
Route::get('/hourly/calendar/{month?}/{year?}', ['as' => '/hourly/calendar', 'uses' => 'TimesheetController@hourlyCalendar']);


// POST Salaried Calendar entry data to TimesheetController
Route::post('/timesheet-poster-hour-cal', 'TimesheetController@timesheetHourlyCalDownload')
    ->name('timesheet-poster-hour-cal');

