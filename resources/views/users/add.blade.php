@extends('layouts.app')

@section('content')
    <div class="content">
        <!-- Header -->
        <h4 class="d-flex margin-hdr-30 padding-hdr-20">
            Create a new User <a class="btn btn-outline-primary ml-auto p-2" href="{{route('user')}}">Back</a>
        </h4>
        <!-- Error Message -->
    @if(session('success')) @include('blocks.success') @endif
    @if(session('errors')) @include('blocks.error') @endif
    <!-- Form -->
        <form class="form-horizontal" action="{{route('user.store')}}" method="post">
            @csrf

            <div class="form-group row"><!-- Name -->
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row"><!-- Email -->
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Enter email"
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row"><!-- Password -->
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password" placeholder="Enter password"
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row"><!-- Re-Password -->
                <label class="control-label col-sm-2" for="password_confirm">Re-Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirm" placeholder="Enter re-password"
                           class="form-control @error('password_confirm') is-invalid @enderror">
                    @error('password_confirm')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row"><!-- Button -->
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection