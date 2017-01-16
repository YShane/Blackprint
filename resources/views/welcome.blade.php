<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blackprint</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
            .information {

                font-size: 12px;
                font-weight: 600;
                text-blink: 5;


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
                        <a href="{{ url('home') }}">Home</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                        <a href="{{ url('register') }}">Register</a>
                    @endif
                </div>
            @endif
<!--
            <form method="post" action="/">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div>
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password">
                    </div>
                    <div>
                        <input type="submit" value="Login">
                    </div>
                </fieldset>
            </form>     -->

            <div class="content">
                <div class="title m-b-md">
                    Blackprint
                </div>

                <div class="links">
                    @if (Auth::guest())

                    <div class="information">
                        <a href="{{ url('login' )}}">Information</a>

                    </div>


                    @else


                    <a href="https://ebay.com">Databases</a>
                    <a href="https://laracasts.com">Exports</a>
                    <a href="https://laravel-news.com">Sales</a>
                    <a href="https://forge.laravel.com">GitHub</a>
                    <a href="https://github.com/laravel/laravel">Other</a>

                    @endif
                </div>
            </div>

        </div>
        
        


    </body>
</html>
