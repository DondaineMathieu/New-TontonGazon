@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="detail-annonce">
        <h2> {{$annonce->titre}} </h2>
        <p> <b> Description de l'annonce :</b> <i> {{$annonce->texte}}  </i></p>
        <p> <b> Surface a tondre : </b> <i> {{$annonce->surface}} m² </i></p>
        <p> <b> Vous serez payé : </b> <i> {{$annonce->prix}} € </i></p>
    </div>
    <button id="postuler">Postuler</button>
</div>

@endsection