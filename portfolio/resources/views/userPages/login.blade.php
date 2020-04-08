<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
    <meta charset="UTF-8">
    <meta name="csrf-token" content="csrf_token()">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title> Papa Laity Ndiaye - {{$title}}</title>
    @show
</head>

<body>
    <div class="header">
        <div class="header__texture"></div>
        <div class="container">
            @section('header_navbar')
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <h1 class="header__navbar--logo-title">DI-SAU</h1>
                </div>
                <div class="header__navbar--menu">
                    <a href="/" class="header__navbar--menu-link"> A Propos</a>
                </div>
            </div>
            @show
            <div class="login-box">
                <h1>Login</h1>

                <div class="textbox">
                    <i></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="textbox">
                    <i></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="button" class="btn" value="Sign in">
            </div>

        </div>
    </div>
</body>

</html>