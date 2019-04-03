@extends('layouts.app')

@section('content')
<div class="form-container">
    <h1>Inscription</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label for="nom" class="form-label"><b>{{ __('Nom') }}</b></label>

                <div class="form-group-input">
                    <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" 
                        name="nom" value="{{ old('nom') }}" required autofocus>

                    @if ($errors->has('nom'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="prenom" class="form-label"><b>{{ __('Prenom') }}</b></label>

                <div class="form-group-input">
                    <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" 
                        name="prenom" value="{{ old('prenom') }}" required>

                    @if ($errors->has('prenom'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('prenom') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="form-label"><b>{{ __('Adresse mail') }}</b></label>

                <div class="form-group-input">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="tel" class="form-label"><b>{{ __('Telephone') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group">
                <label for="password" class="form-label"><b>{{ __('Mot de passe') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group">
                <label for="password-confirm"
                    class="form-label"><b>{{ __('Repeter mot de passe') }}</b></label>

                <div class="form-group-input">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            {{-- Fin Confirm mot de passe de l'utilisateur --}}

            {{-- adresse de l'utilisateur --}}
            <div class="form-group">
                <label for="adresse1" class="form-label"><b>{{ __('Adresse') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group">
                <label for="adresse2" class="form-label"><b>{{ __('Complément d\'Adresse') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group">
                <label for="ville" class="form-label"><b>{{ __('Ville') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group">
                <label for="code_postal" class="form-label"><b>{{ __('Code Postal') }}</b></label>

                <div class="form-group-input">
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
            <div class="form-group-checkbox">

                <div class="form-group-input">
                    <div class="form-radio" > <input id="role_tondeur" type="radio" class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" name="role" value="tondeur"> <label for="role_tondeur" class="form-label"><b>{{ __('Tondeur') }}</b></label></div>
                    <div class="form-radio"> <input id="role_tondu" type="radio" class="form-control{{ $errors->has('code_postal') ? ' is-invalid' : '' }}" name="role" value="tondu"> <label for="role_tondu" class="form-label"><b>{{ __('Tondu') }}</b></label></div>
                </div>
            </div>
            {{-- Fin role de l'utilisateur --}}

            <div class="form-submit">
                <button type="submit">
                    {{ __('C\'est parti !') }}
                </button>
            </div>

            <div class="deja-compte">
                <a href="{{ route('login') }}">
                    J'ai déja un compte
                </a>
            <div>

        </form>
    </div>
</div>
@endsection