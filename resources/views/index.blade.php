<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="/">Home</a>
            @guest
                <a href="/register">Register</a>
                <a href="/login">Log In</a>
            @endguest
            @auth
                <a href="/">Log Out</a>
            @endauth
        </nav>
        <div id="app">
            <div class="content">
                <div class="title m-b-md">
                    <h2>Hello</h2>
                    @if (session()->has('success'))
                    <div >
                        <p
                        class="form-control"
                        style="color: white; text-align:left; background: green"
                        >
                            {{session()->get('success')}}
                        </p>
                    </div>
                @endif
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
