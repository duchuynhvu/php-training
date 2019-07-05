@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('user')}}">back </a></p>
        <h2>Add a new user</h2>
        <br>
        <form action="/user/store" method="post">
            @csrf
            <input type="text" name="name" value="{{$user->name}}">
            <br><br>
            <input type="text" name="email" value="{{$user->email}}">
            <br><br>
            <input type="password" name="password" value="">
            <br><br>
            <input type="password" name="re-password" value="">
            <br><br>
            <input type="submit" value="update">

            <input type="hidden" name="id" value="{{$user->id}}">
        </form>
        <br><br>

        @include('layouts.message')

    </div>
@endsection