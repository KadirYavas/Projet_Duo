<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Accueil | Librairie Exo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f8f9fa;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        /*.full-height {*/
        /*    height: 100vh;*/
        /*}*/

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #eb412f;
            padding: 0 25px;
            font-size: 23px;
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('image/laravelLogo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        Librairie Exo
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">Accueil<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administration
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('adminUser')}}">Utilisateurs</a>
                    <a class="dropdown-item" href="{{route('adminAvatar')}}">Avatars</a>
                    <a class="dropdown-item" href="#">Auteurs</a>
                    <a class="dropdown-item" href="#">Genres</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title mt-5 m-b-md w-100">
            <img  src="{{ asset('image/1200px-Laravel.svg.png') }}" width="200">
        </div>
        <img class="mb-5" src="{{ asset('image/laravel-wordmark-1.svg') }}" width="300">
    </div>
</div>
{{--    scripts--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
