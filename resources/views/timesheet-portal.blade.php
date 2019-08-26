<!DOCTYPE html>
<html lang="en">

<head>
    <title>YOUR COMPANY Timesheet Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body{
            background-color: #ebf2f8;
        }
        @font-face {
            font-family: "Verlag";
            src: url(/fonts/VerlagBold.otf);
        }

        @font-face {
            font-family: "GothamBookReg";
            src: url(/fonts/GothamBookRegular.otf);
        }

        @font-face {
            font-family: "GothamMedReg";
            src: url(/fonts/GothamMediumRegular.ttf);
        }

        .gotham-book-reg {
            font-family: "GothamBookReg";
        }

        .gotham-med-reg {
            font-family: "GothamMedReg";
        }

        .verlag-bold {
            font-family: "Verlag";
        }

        .timesheet-portal-header{
            font-size: 3em;
        }

        .timsheet-portal-para {
            font-size: 1.5em;
        }

    </style>

</head>

<body>
<div class="container">

<br/>
<br/>

<h1 class="text-center verlag-bold timesheet-portal-header"><img src="{{url('/images/logo.png')}}" alt="Company Logo"> YOUR COMPANY NAME Timesheet Portal</h1>
<br/>
    <h3 class="text-center verlag-bold">Greetings <b>YOUR COMPANY NAME</b> Employee!</h3>
<p class="text-center gotham-book-reg timsheet-portal-para">Please select the appropriate link to complete your timesheet</p>
<br/>
<br/>

{{--    commented out code in Laravel...--}}
{{--<div class="row mx-auto">--}}


{{--    <div class="col-6 text-center">--}}
{{--        <a class="btn btn-lg btn-primary" href="{{url('/hourly')}}">Hourly Employees</a>--}}
{{--    </div>--}}

{{--    <div class="col-6 text-center">--}}
{{--        <a class="btn btn-lg btn-info" href="{{url('/salary')}}">Salaried Employees</a>--}}
{{--    </div>--}}


{{--</div>--}}

    <div class="row mx-auto mt-5">

        <div class="col-6 text-center">
            <a class="btn btn-lg btn-primary" href="{{url('/hourly/calendar')}}">Hourly Calendar</a>
        </div>

        <div class="col-6 text-center">
            <a class="btn btn-lg btn-info" href="{{url('/salary/calendar')}}">Salaried Calendar</a>
        </div>

    </div>

</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<footer class="text-center">
    <span class="mr-5 gotham-med-reg">Copyright {{date('Y')}} YOUR COMPANY NAME</span>
</footer>
</body>


</html>
