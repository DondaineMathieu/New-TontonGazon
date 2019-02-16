@extends('layouts.app')

@section('content')

@foreach ($annonces as $as)
    <a href="/annonce/{{$as->id}}"> {{$as->titre}} </a> <br />
    <p> Surface a tondre : {{$as->surface}} m²</p>
    <p> vous serai payé : {{$as->prix}} €</p>
@endforeach

@endsection