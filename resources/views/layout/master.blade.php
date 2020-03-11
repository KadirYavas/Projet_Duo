<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>
        @yield('title')
    </title>
</head>
<body>
<header>
{{--        Navbar--}}
<!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/laravelLogo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            Projet Duo
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
                        <a class="dropdown-item" href="#">Utilisateurs</a>
                        <a class="dropdown-item" href="#">Catégories</a>
                        <a class="dropdown-item" href="#">Images</a>
                        <a class="dropdown-item" href="#">Avatars</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    {{--breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            {{--        <li class="breadcrumb-item active" aria-current="page">Home</li>--}}
            @yield('breadcrumb')
        </ol>
    </nav>
</header>
<main class="container w-75 text-center">
    <section id="title">
        <h1>Administration</h1>
        <h2>@yield('h2')</h2>
    </section>
    <section id="content">
        @yield('content')
    </section>

</main>


{{--    scripts--}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
