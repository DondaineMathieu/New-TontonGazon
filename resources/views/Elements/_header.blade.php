<nav class="nav">
    <ul>
        <li id="nav-V-ann"><a href="/annonces">Voir les annonces</a></li>
        <li id="nav-P-ann"><a href="/creer-annonce">Publier une annonce</a></li>
    @guest
        <li id="nav-connect"><a href="{{ route('login') }}">Connexion</a></li>
        <li id="nav-inscription"><a href="{{ route('register') }}">Inscription</a></li>
    @else
        <li id="nav-profil">Bonjour <b><a href="/utilisateur/{{ Auth::user()->id }}"> {{ Auth::user()->prenom }} </a></b></li>
        <li id="nav-deconnect"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Deconnexion </a></li>
    @endguest
    <ul>
</nav>