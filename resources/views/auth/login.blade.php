@extends('layouts.auth')

@section('title', 'Inloggen')

@section('content')
    <div class="container">
        <form class="form-auth absolute-center" method="POST" action="{{ route('auth.login.submit') }}">
            @if (Session::has('message'))
                <div class="alert alert-info">
                    <h3><i class="fa fa-exclamation-triangle"></i> Melding</h3>
                    {{ Session::get('message') }}
                </div>
            @endif
            <h1 class="form-auth-heading">Inloggen</h1>
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input name="email" type="text" class="form-control" placeholder="Emailadres" value="{{ old('email') }}" autofocus>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input name="password" type="password" class="form-control" placeholder="Wachtwoord">
            </div>
            <button class="btn btn-lg btn-warning btn-block" type="submit">
                Inloggen
            </button>
        </form>
    </div>
@endsection
