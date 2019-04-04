@extends('layouts.app')

@section('content')

<div class="main-content">

    @if(Auth::id() != $utilisateur->id)
        <h1>Vous êtes sur le profil de : {{$utilisateur ->nom}} {{$utilisateur ->prenom}} </h1>
    @else
        <h1>Vous etes sur votre profil </h1>
        @include("_utilisateurs-top")
        @include("_utilisateurs-options")
    @endif    
</div>

@endsection