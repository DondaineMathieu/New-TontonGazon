@extends('layouts.app')

@section('content')
<div class="form-container">
    <h1> Connexion </h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label"><b>Adresse Mail</b></label>

            <div class="form-group-input">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" placeholder="exemple@gmail.com" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="form-label"><b>Mot de passe</b></label>

            <div class="form-group-input">
                <input id="password" type="password" placeholder="azerty123456"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-remember">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Se souvenir de moi
            </label>
        </div>

        <div class="form-submit">
            <button type="submit">
                {{ __('C\'est parti !') }}
            </button>
        </div>

        <div class="form-reset">
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublié ?') }}
            </a>
            @endif
        <div>
    </form>
</div>
@endsection