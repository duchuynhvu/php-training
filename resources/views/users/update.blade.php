@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('user-list')}}">back </a></p>
        <h2>Add a new user</h2>
        <br>
        <form action="" method="post">
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
    </div>
@endsection