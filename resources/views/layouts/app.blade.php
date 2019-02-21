<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav">
            <ul>
                <li id="nav-V-ann"><a href="/annonces">Voir les annonces</a></li>
                <li id="nav-P-ann"><a href="/creer-annonce">Publier une annonce</a></li>
            @guest
                <li id="nav-connect"><a href="{{ route('login') }}">Connexion</a></li>
                <li id="nav-inscription"><a href="{{ route('register') }}">Inscription</a></li>
            @else
                <li id="nav-profil">Bonjour <a href="/utilisateur/{{ Auth::user()->id }}"> {{ Auth::user()->prenom }} </a></li>
                <li id="nav-deconnect"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Deconnexion </a></li>
            @endguest
            <ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('Elements/_footer')
</body>
</html>
