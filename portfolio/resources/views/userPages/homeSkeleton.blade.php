<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="csrf_token()">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>{{$title}}</title>
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
                    <a href="/profil" class="header__navbar--menu-link"> <i></i> Portfolio</a>
                    <a href="/services" class="header__navbar--menu-link"> <i></i> Services & Projects</a>
                    <a href="/contact" class="header__navbar--menu-link"> <i></i> Contact</a>
                    <a href="/login" class="header__navbar--menu-link"> <i></i> Login</a>
                </div>
            </div>
            @show

            @yield('content')
        </div>
    </div>
    @section('footer')
    <footer class="footer">
    <h4>Footer Part</h4>
    </footer>
    @show
</body>

</html>