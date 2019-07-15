@extends('layouts.app')

@section('content')
    <div id="content">
        <!-- Header -->
        <h4 class="d-flex margin-hdr-30 padding-hdr-20">
            Update user <a class="btn btn-outline-primary ml-auto p-2" href="{{route('user')}}">Back</a>
        </h4>

        <!-- Error Message -->
    @if(session('success'))
        @include('blocks.success')
    @endif
    @if(session('errors'))
        @include('blocks.error')
    @endif
    <!-- Form -->
        <form action="/user/store" method="post" novalidate>
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name') ? old('name') : $user->name}}" required
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="{{old('email') ? old('email') : $user->email}}" required
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" value=""
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirm" class="col-sm-2 col-form-label">Re-password</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirm" value=""
                           class="form-control @error('password_confirm') is-invalid @enderror">
                    @error('password_confirm')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <!-- Button -->
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>

            <input type="hidden" name="id" value="{{$user->id}}">
        </form>
    </div>
@endsection