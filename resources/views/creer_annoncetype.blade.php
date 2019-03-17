@extends('layouts.app')

@section('content')

<h1> Creer une annonce Type</h1>
<h2> Cela vous permettra de ne pas avoir a retaper a chaque fois une annonce</h2>

<form method="POST" action="{{ route('creerAnnoncetype') }}">
    @csrf
    
    <div class="form-group row">
        <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>

        <div class="col-md-6">
            <input id="titre" type="text" class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" name="titre" value="{{ old('titre') }}" required autofocus>

            @if ($errors->has('titre'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('titre') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="texte" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

        <div class="col-md-6">
            <input id="texte" type="text" class="form-control{{ $errors->has('texte') ? ' is-invalid' : '' }}" name="texte" value="{{ old('texte') }}" required>

            @if ($errors->has('texte'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('texte') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="surface" class="col-md-4 col-form-label text-md-right">{{ __('Surface') }}</label>

        <div class="col-md-6">
            <input id="surface" type="number" class="form-control{{ $errors->has('surface') ? ' is-invalid' : '' }}" name="surface" value="{{ old('surface') }}" required>

            @if ($errors->has('surface'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('surface') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

        <div class="col-md-6">
            <input id="prix" type="number" class="form-control{{ $errors->has('prix') ? ' is-invalid' : '' }}" name="prix" value="{{ old('prix') }}" required>

            @if ($errors->has('prix'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('prix') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Creer l\'annonce type') }}
            </button>
        </div>
    </div>
</form>

@endsection