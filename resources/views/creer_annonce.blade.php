@extends('layouts.app')

@section('content')

<div class="main-content">

@guest
    <h1> Creer une annonce </h1>
    <div>Vous ne pouvez pas creer d'annonce sans être connecté</div>
    <a href="/login">Se connecter</a>
    <a href="/register">Creer un compte</a>
@else
    @if($annonceType == false)
        <div>vous devez d'abord creer une annonce type avant de pouvoir creer une nouvelle annonce</div>
        <a href="/creer-annoncetype">Creer une annonce type</a>
    @else
    <div class="form-container">
        <h1> Creer une annonce </h1>

        <form method="POST" action="{{ route('creerAnnonce') }}">
            @csrf
            
            {{-- titre de l'annonce --}}
            <div class="form-group">
                <label for="titre" class="form-label"><b>{{ __('Titre') }}</b></label>

                <div class="form-group-input">
                    <input id="titre" type="text" class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" name="titre" value="{{ old('titre') }}" required autofocus>

                    @if ($errors->has('titre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('titre') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin Titre de l'annonce --}}

            {{-- texte de l'annonce --}}
            <div class="form-group">
                <label for="texte" class="form-label"><b>{{ __('Description') }}</b></label>

                <div class="form-group-input">
                    <input id="texte" type="text" class="form-control{{ $errors->has('texte') ? ' is-invalid' : '' }}" name="texte" value="{{ old('texte') }}" required>

                    @if ($errors->has('texte'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('texte') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin texte de l'annonce --}}

            {{-- surface de l'annonce --}}
            <div class="form-group">
                <label for="surface" class="form-label"><b>{{ __('Surface') }}</b></label>

                <div class="form-group-input">
                    <input id="surface" type="number" class="form-control{{ $errors->has('surface') ? ' is-invalid' : '' }}" name="surface" value="{{ old('surface') }}" required>

                    @if ($errors->has('surface'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('surface') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin surface de l'annonce --}}

            {{-- Prix de l'annonce --}}
            <div class="form-group">
                <label for="prix" class="form-label"><b>{{ __('Prix') }}</b></label>

                <div class="form-group-input">
                    <input id="prix" type="number" class="form-control{{ $errors->has('prix') ? ' is-invalid' : '' }}" name="prix" value="{{ old('prix') }}" required>

                    @if ($errors->has('prix'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('prix') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin Prix de l'annonce --}}

            <div class="form-group">
                <label for="date_tonte" class="form-label"><b>{{ __('Date de la tonte') }}</b></label>
                <div class="form-group-input">
                    <input type="date" name="date_tonte"/>
                </div>
            </div>

            <div class="form-submit">
                    <button type="submit">
                        Creer l'annonce
                    </button>
                </div>
        </form>
    </div>
    @endif
@endguest

<div id="footer-img">
        @include('Elements/_footer-img')
    </div>
    
</div>

@endsection