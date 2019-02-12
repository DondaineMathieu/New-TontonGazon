@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Register') }}</div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            {{-- Nom de l'utilisateur --}}
            <div class="form-group row">
                <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>

                    @if ($errors->has('nom'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin nom de l'utilisateur --}}

            {{-- prenom de l'utilisateur --}}
            <div class="form-group row">
                <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                <div class="col-md-6">
                    <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required>

                    @if ($errors->has('prenom'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('prenom') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin prenom de l'utilisateur --}}

            {{-- mail de l'utilisateur --}}
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin mail de l'utilisateur --}}

            {{-- tel de l'utilisateur --}}
            <div class="form-group row">
                <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                <div class="col-md-6">
                    <input id="tel" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required>

                    @if ($errors->has('tel'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tel') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin tel de l'utilisateur --}}

            {{-- Mot de passe de l'utilisateur --}}
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin Mot de passe de l'utilisateur --}}

            {{-- Confirm mot de passe de l'utilisateur --}}
            <div class="form-group row">
                <label for="password-confirm"
                    class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            {{-- Fin Confirm mot de passe de l'utilisateur --}}

            {{-- adresse de l'utilisateur --}}
            <div class="form-group row">
                <label for="adresse1" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                <div class="col-md-6">
                    <input id="adresse1" type="text" class="form-control{{ $errors->has('adresse1') ? ' is-invalid' : '' }}" name="adresse1" value="{{ old('adresse1') }}" required>

                    @if ($errors->has('adresse1'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('adresse1') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin adresse de l'utilisateur --}}

            {{-- complement adresse de l'utilisateur --}}
            <div class="form-group row">
                <label for="adresse2" class="col-md-4 col-form-label text-md-right">{{ __('Complément d\'Adresse') }}</label>

                <div class="col-md-6">
                    <input id="adresse2" type="text" class="form-control{{ $errors->has('adresse2') ? ' is-invalid' : '' }}" name="adresse2" value="{{ old('adresse2') }}">

                    @if ($errors->has('adresse2'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('adresse2') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin complement adresse de l'utilisateur --}}

            {{-- ville de l'utilisateur --}}
            <div class="form-group row">
                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                <div class="col-md-6">
                    <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required>

                    @if ($errors->has('ville'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ville') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin ville de l'utilisateur --}}

            {{-- code_postal de l'utilisateur --}}
            <div class="form-group row">
                <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                <div class="col-md-6">
                    <input id="code_postal" type="text" class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" name="code_postal" value="{{ old('code_postal') }}" required>

                    @if ($errors->has('code_postal'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code_postal') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            {{-- Fin code_postal de l'utilisateur --}}
            
            {{-- role de l'utilisateur --}}
            <div class="form-group row">

                <div class="col-md-6">
                    <input id="role_tondu" type="radio" class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}"> <label for="role_tondu" class="col-md-4 col-form-label text-md-right">{{ __('Tondu') }}</label>
                    <input id="role_tondeur" type="radio" class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}"> <label for="role_tondeur" class="col-md-4 col-form-label text-md-right">{{ __('Tondeur') }}</label>
                </div>
            </div>
            {{-- Fin role de l'utilisateur --}}

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('C\'est parti !') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection