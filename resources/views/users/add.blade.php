@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('user')}}">back </a></p>
        <h2>Add a new user</h2>
        <br>
        <form action="/user/store" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter your name">
            <br><br>
            <input type="text" name="email" placeholder="Enter your email">
            <br><br>
            <input type="password" name="password" placeholder="Enter password">
            <br><br>
            <input type="password" name="re-password" placeholder="Re-enter password">
            <br><br>
            <input type="submit" value="Add">
        </form>
        <br><br>

        @include('layouts.message')

    </div>
@endsection