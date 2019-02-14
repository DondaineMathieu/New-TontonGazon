@extends('layouts.app')

@section('content')

<h1>Bonjour {{$utilisateur ->nom}} {{$utilisateur ->prenom}} </h1>

@endsection