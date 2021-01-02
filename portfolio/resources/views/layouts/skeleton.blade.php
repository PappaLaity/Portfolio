@section('header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('/css/tab.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="{{asset('css/footer.css')}}">-->
    <!-- a 1000 px Reduire le navbar en un boutton-->
    <title>Pappalaity @yield('title')</title>
</head>

<body>
    <div class="header">
        <div class="header__texture"></div>
        <div class="container">
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <h1 class="header__navbar--logo-title">DI-SAU</h1>
                </div>
                <div class="header__navbar--menu">
                    <a href="/" class="header__navbar--menu-link active"> About</a>
                    <a href="resume" class="header__navbar--menu-link"> <i></i> Resume</a>
                    <a href="service" class="header__navbar--menu-link"> <i></i> Services & Projects</a>
                    <a href="contact" class="header__navbar--menu-link"> <i></i> Contact</a>
                    <!--<a href="#login" class="header__navbar--menu-link"> <i></i> Login</a>-->
                </div>
            </div>
            @show

            @yield('content')

            @section('footer')

        </div>
        <div class="bas_page">
            <!--footer-->
        </div>
        <!--<script src="../js/onglets.js"></script>-->
</body>
@show