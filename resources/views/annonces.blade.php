@extends('layouts.app')

@section('content')

<div class="main-content">

@foreach ($annonces as $as)
    <a href="/annonce/{{$as->id}}"> {{$as->titre}} </a> <br />
    <p> Surface a tondre : {{$as->surface}} m²</p>
    <p> vous serai payé : {{$as->prix}} €</p>
@endforeach

    <div id="footer-img">
        @include('Elements/_footer-img')
    </div>
    
</div>

@endsection