@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="detail-annonce">
        <h2> {{$annonce->titre}} </h2>
        <p> <b> Description de l'annonce :</b> <i> {{$annonce->texte}}  </i></p>
        <p> <b> Surface a tondre : </b> <i> {{$annonce->surface}} m² </i></p>
        <p> <b> Vous serez payé : </b> <i> {{$annonce->prix}} € </i></p>
    </div>
    
    @guest
    <div class="not-possible">
        <div> Vous devez etre connecté avant de postuler à une demande </div>
        <a href="/login">Se connecter</a>
        <a href="/register">Creer un compte</a>
    </div>
    @elseif(Auth::user()->role == "tondu")
    <div class="not-possible">
        <div> Les tondus ne peuvent pas réppondre à une annonce </div>
        <a href="/creer-annonce">Creer une annonce</a>
        <a href="/logout">Deconnexion</a>
    </div>
    @else
    <a href="/reponse-postuler/{{$annonce->id}}"><button id="postuler">Postuler</button></a>
    @endguest
</div>

@endsection