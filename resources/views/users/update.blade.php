@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('user')}}">back </a></p>
        <h2>Update user</h2>
        <br>
        <!-- Error Message -->
        @if(session('success'))
            @include('blocks.success')
        @endif
        @if(session('errors'))
            @include('blocks.error')
        @endif
        <!-- Form -->
        <form action="/user/store" method="post">
            @csrf
            <input type="text" name="name" value="{{Input::old('name') ? Input::old('name') : $user->name}}" autofocus>
            <br><br>
            <input type="text" name="email" value="{{Input::old('email') ? Input::old('email') : $user->email}}">
            <br><br>
            <input type="password" name="password" value="">
            <br><br>
            <input type="password" name="re-password" value="">
            <br><br>
            <input type="submit" value="update">

            <input type="hidden" name="id" value="{{$user->id}}">
        </form>
    </div>
@endsection