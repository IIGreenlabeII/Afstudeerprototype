<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <script type="text/javascript" src="{{ URL::asset('dist/spin.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('dist/ladda.min.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ URL::asset('dist/ladda.min.css') }}" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
                background-color: #F2F0E5 !important;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .btn{
                width: 400px;
                height: 200px;
                background-color: #48566E !important;
                border: 2px solid #B06E6E;
                margin-top: 25px;
                margin-bottom: 25px;
                color: #fff;
                font-weight: bold;
                font-size: 2em;
            }

            .bar {
                height: 100px;
                width: 100%;
                background-color: #A09DAD;
                margin-bottom: 50px;
                color: #48566E;
                font-weight: bold;
                text-align: center;
                font-size: 4.5em;
            }
        </style>
    </head>
    <body>
        <div class="bar">
            Awakenings
            </div>
        <div class="container">
            <div class="content">
                {!! Form::open(array('action' => 'Vote1Controller@store')) !!}
                {!! Form::hidden('id', 1 )!!}
                {!! Form::submit('Loco Dice: Sending this one out', array('id'=>'submitButton', 'class'=>'btn')) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => 'Vote1Controller@store')) !!}
                {!! Form::hidden('id', 2 )!!}
                {!! Form::submit('Loco Dice: Get Comfy', array('id'=>'submitButton', 'class'=>'btn')) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => 'Vote1Controller@store')) !!}
                {!! Form::hidden('id', 3 )!!}
                {!! Form::submit('Loco Dice: Party Angels', array('id'=>'submitButton', 'class'=>'btn')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
