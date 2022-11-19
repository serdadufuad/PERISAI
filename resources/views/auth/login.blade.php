@extends('layouts.app')

@section('content')

<img class="mb-4" src="{{ asset('assets/images/logo_perisai.png') }}" alt="" width="72" height="auto">
<h1 class="h1 mb-3 fw-normal"><b>PERISAI</b></h1>
<div class="card">
    <div class="card-header bg-danger bg-gradient">
        <h1 class="h5 mb-3 fw-normal"><b>Please Login</b></h1>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email">{{ __('Email') }}</label>
            </div>
            <div class="form-floating">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="password">{{ __('Password') }}</label>
            </div>
            <div class="checkbox mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary bg-gradient" type="submit">Login</button>
        </form>
    </div>
</div>

@endsection
