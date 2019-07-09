@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('user')}}">back </a></p>
        <h2>Add a new user</h2>
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
            <input type="text" name="name" value="{{Input::old('name')}}" placeholder="Enter your name" autofocus>
            <br><br>
            <input type="text" name="email" value="{{Input::old('email')}}" placeholder="Enter your email">
            <br><br>
            <input type="password" name="password" placeholder="Enter password">
            <br><br>
            <input type="password" name="password_confirm" placeholder="Re-enter password">
            <br><br>
            <input type="submit" value="Add">
        </form>
    </div>
@endsection