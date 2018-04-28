<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ url('Icon.png') }}">

        <title>Dept Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Premium Icons -->
    <!-- Main styles for this application -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #9f191f;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <button type="button" class="btn btn-success"><a href="{{ url('/login') }}" style="text-decoration: none;">Login</a></button>
                        <button type="button" class="btn btn-warning"><a href="{{ url('/register')}}" style="text-decoration: none;">Register</a></button>

                    @endif
                </div>
            @endif

            <div class="content" style="background-color: #ffffcc; color: #ff6666; padding: 11px 7px; width: 800px; height: 100px; text-align: center;">
            <h1><strong>Department Management</strong></h1>
                <div class="title m-b-md">
                    <strong><b></b></strong>
                </div>

            </div>
        </div>
    </body>
</html>
