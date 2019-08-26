## Get your Computer Ready for Laravel:
Install Composer:

### Mac:
https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

### Windows:  
https://getcomposer.org/doc/00-intro.md#installation-windows

## Get WKHTMLTOPDF installed on your computer:

This project requires that you install wkhtmltopdf on your computer and to set up composer so that you can install the Snappy Laravel package which allows you to use wkhtmltopdf to generate pdfs from HTML/CSS.
https://wkhtmltopdf.org/downloads.html

## Install/Configure Laravel 5 Snappy PDF/Image Wrapper:

Read the documentation here to configure Snappy:
https://github.com/barryvdh/laravel-snappy

This project should be mostly configured already.  The big thing here is to get wkhtmltopdf installed and configured on your machine.  If you are on a Windows machine, extra care may be required to set the /config/snappy.php file in this project.  Pay careful to that part of the documentation after wkhtmltopdf has been installed on your machine!

## About this Project:

### Controller
This project is actually fairly simple.  There is one Controller, the TimesheetController that can be found at app/Http/TimesheetController.php

The TimesheetController has all of the controller actions used to display the calendars, download, or stream the PDF files.  I made it a point to show in separate controller actions how I could DRY up the code I wrote.

### Routes
To visit the routes that allow for posting and the downloading/streaming of a PDF file from HTML/CSS please view /routes/web.php

### Views
To view the Views of this project please visit the /resources/views folder.  You will notice that on several of the view files the entire Bootstrap 4 CSS file is pasted into the head.  I know that this is not ideal/best practice, but was required for the generated PDF to be formatted properly.  In the future, my goal is to eliminate the unnecessary/unused CSS from these files.  

### Helpers
Helper Methods Utilized To Generate Calendar:

There is a helper method file that utilizes handy methods to help generate the calendar of any given month using PHP.  You can click back or forward in time as far as you wish.  You may also type in the URL of whatever month you wish to to view that month’s calendar (e.g. ‘/salary/calendar/8/2525’).  This helpers file can be found at:  /app/Http/helpers.php.  I would like to DRY up this code more in the future to better optimize this for fun.

### View what this project looks similar to when running:

If you do not wish to get this project running locally then you may view how this project looks like when running by visiting the portfolio section of https://thisdudecodes.com.  :)
