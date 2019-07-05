@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('category')}}">back </a></p>
        <h2>Add a new category</h2>
        <br>
        <form action="/category/store" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter category name">
            <br><br>
            <input type="submit" value="Add">
        </form>
        <br><br>

        @include('layouts.message')
    </div>
@endsection