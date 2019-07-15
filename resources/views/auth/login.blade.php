@extends('layouts.app')

@section('content')
    <div class="login-form">
        <form action="{{route('login')}}" method="post" novalidate>
            @csrf
            <!-- Header -->
            <h2 class="text-center">Log in</h2>

            <!-- Errors Message -->
            @if(session('error'))
                <div class="alert alert-danger text-center">{{session('error')}}</div>
            @endif

            <!-- Form Control -->
            <div class="form-group">
                <input name="email" type="email" value="{{ old('email') }}" required
                       class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <input name="password" type="password" required
                       class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                <a href="{{route('password.request')}}" class="pull-right">Forgot Password?</a>
            </div>
        </form>

        <p class="text-center"><a href="{{route('register')}}">Create an Account</a></p>
    </div>

@endsection
