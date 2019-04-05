<div id="menuToggle">
    <button id="button-hamburger" class="hamburger hamburger--collapse not-active" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>  
</div>
<nav class="nav">
    <div>
        <div id="logo-menu">
            <a href="/">
            <img src="/img/logo.png" alt="Logo"/>
            </a>
        </div>   
    </div>
    <div id="menu">
        <ul>
            <li id="nav-V-ann"><a href="/annonces">Voir les annonces</a></li>
            <li id="nav-P-ann"><a href="/creer-annonce">Publier une annonce</a></li>
        @guest
            <li id="nav-connect"><a href="{{ route('login') }}">Connexion</a></li>
            <li class="li-last" id="nav-inscription"><a href="{{ route('register') }}">Inscription</a></li>
        @else
            <li id="nav-profil"> <b><a href="/utilisateur/{{ Auth::user()->id }}"> Bonjour {{ Auth::user()->prenom }} </a></b></li>
            <li class="li-last" id="nav-deconnect"><a href="{{ route('logout') }}" {{-- onclick="event.preventDefault(); document.getElementById('logout-form').submit();"--}}> Deconnexion </a></li>
        @endguest
    <ul>
    </div>
</nav>