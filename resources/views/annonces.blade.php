@extends('layouts.app')

@section('content')

<div class="main-content">

    <div class="annonce-list">
    <h1> Liste des annonces </h1>
    @foreach ($annonces as $as)
        @if($as->date_tonte != null && $as->date_tonte > $date)
            <div class="annonce-detail">
                <ul>
                    <li> <a href="/annonce/{{$as->id}}"> {{$as->titre}} </a> </li>
                    <li> Surface à tondre : {{$as->surface}} m²</li>
                    <li> Vous serez payé : {{$as->prix}} €</li>
                    <li> Date de tonte : {{$as->date_tonte}}</li>
                </ul>
            </div>
        @endif
    @endforeach
    </div>

    <div class="annonce-list">
    <h2 id="annonces-terminees" class="not-active">v Liste des annonces terminées v</h2>
    <div id="list-terminees">
    @foreach ($annonces as $as)
        @if($as->date_tonte != null && $as->date_tonte < $date)
            <div class="annonce-detail">
                <ul>
                    <li> <a href="/annonce/{{$as->id}}"> {{$as->titre}} </a> </li>
                    <li> Surface à tondre : {{$as->surface}} m²</li>
                    <li> Vous serez payé : {{$as->prix}} €</li>
                    <li> Date de tonte : {{$as->date_tonte}}</li>
                </ul>
            </div>
        @endif
    @endforeach
    </div>
    </div>

    <div class="annonce-list">
    <h2 id="annonces-type" class="not-active">v Liste des annonces Type v</h2>
    <div id="list-type">
    @foreach ($annonces as $as)
        @if($as->date_tonte == null)
            <div class="annonce-detail">
                <ul>
                    <li> <a href="/annonce/{{$as->id}}"> {{$as->titre}} </a> </li>
                    <li> Surface à tondre : {{$as->surface}} m²</li>
                    <li> Vous serez payé : {{$as->prix}} €</li>
                    <li> Date de tonte : {{$as->date_tonte}}</li>
                </ul>
            </div>
        @endif
    @endforeach
    </div>
    </div>

    <div id="footer-img">
        @include('Elements/_footer-img')
    </div>
    
</div>

@endsection