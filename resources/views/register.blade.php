<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{url('public/css/app.css')}}">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sign Up
                </div>
                <form action="/register" method="POST" class="form">
                    @csrf
                    {{-- cross site request forgery --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            class ="form-control"
                            id="name"
                            name="name"
                            type="text"
                            placeholder="Enter your first name"
                            value="{{old('name')}}"
                        >
                            @error('name')
                                <p style="color:red; text-align:left">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label createfor="email">Email</label>
                        <input
                            class="form-control"
                            id="email"
                            name="email"
                            type="email"
                            placeholder="Enter your email"
                            value="{{old('email')}}"
                        >
                            @error('email')
                                <p style="color:red; text-align:left">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            class="form-control"
                            id="password"
                            name="password"
                            type="password" placeholder="Choose a password"
                            value="{{old('password')}}"
                        >
                            {{-- can also put a message, but I haven't  --}}
                            @error('password')
                                <p style="color:red; text-align:left">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="form-group">
                        <button class="form-control btn-primary">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
