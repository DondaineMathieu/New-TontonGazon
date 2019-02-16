@extends('layouts.app')

@section('content')

    <h1> {{$annonce->titre}} </h1>
    <h2> {{$annonce->texte}} </h2>
    <p> Surface a tondre : {{$annonce->surface}} m²</p>
    <p> vous serai payé : {{$annonce->prix}} €</p>

@endsection