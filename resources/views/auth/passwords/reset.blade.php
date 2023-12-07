@extends('layouts.auth_app')
@section('title')
Réinitialiser le mot de passe
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('web/css/web.css') }}" type="text/css">
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Définir un nouveau mot de passe</h4></div>

        <div class="card-body">
            <form method="post" action="{{ url('/password/reset') }}">
                @if ($errors->any())
                    <div class="alert alert-danger p-0">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}"
                           name="email" value="{{ old('email') }}" placeholder="Email" autofocus tabindex="1">
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Mot de passe</label>
                    <input type="password"
                           class="form-control {{ $errors->has('password')?'is-invalid':''}}"
                           name="password" placeholder="Password" tabindex="2">
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="control-label">Confirmer Mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Confirm password" tabindex="3">
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                </div>
                <input type="hidden" name="token" value="{{$token}}">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Définir un nouveau mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Vous avez rappelé vos informations de connexion ?<a href="{{ route('login') }}">Se connecter</a>
    </div>
@endsection
