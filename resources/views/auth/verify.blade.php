@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre adresse') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un mail de vérification a était envoyer à votre adresse mail') }}
                        </div>
                    @endif
                    
                    {{ __('Avant de continuer, veuillez verifier votre email.') }}
                    {{ __('Si vous n\'avez pas recu le mai') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquer ici pour recevoir de nouveau le mail') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
