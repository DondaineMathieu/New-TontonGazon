@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="form-container">
    @if($annonceType == true)
        <h1> Vous avez deja une annonceType </h1>
        <a href="/creer-annonce">Creer une annonce</a>
        <a href="/supprimer-annoncetype">Supprimer votre annonce type</a>
    @else
    <h1> Creer une annonce Type</h1>
    <h2> Cela vous permettra de ne pas avoir a retaper a chaque fois une annonce</h2>

    <form method="POST" action="{{ route('creerAnnoncetype') }}">
        @csrf
        
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

        <div class="form-submit">
                <button type="submit">
                    Creer l'annonce type
                </button>
            </div>
    </form>
    @endif
    <div id="footer-img">
        @include('Elements/_footer-img')
    </div>
</div>

@endsection