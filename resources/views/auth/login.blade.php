@extends('layouts.auth')
@section('content')
<h4 class="card-title">Login</h4>
<form method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
    <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
        <label for="email">E-Mail Address</label>

        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
    @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>

    <div class="form-group" {{ $errors->has('password') ? ' has-error' : '' }}>
        <label for="password">Password
            <a href="forgot.html" class="float-right">
                Forgot Password?
            </a>
        </label>
        <input id="password" type="password" class="form-control" name="password" required data-eye>
    @if ($errors->has('password'))
        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
    @endif
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
    </div>

    <div class="form-group no-margin">
        <button type="submit" class="btn btn-outline-primary btn-block">
            Login
        </button>
    </div>
    <div class="margin-top20 text-center">
        Don't have an account? <a href="{{ url('register/') }}">Create One</a>
    </div>
</form>
@endsection