@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('category')}}">back </a></p>
        <h2>Update category</h2>
        <br>
        <form action="/category/store" method="post">
            @csrf
            <input type="text" name="name" value="{{$cat->name}}">
            <br><br>
            <input type="submit" value="Update">

            <input type="hidden" name="id" value="{{$cat->id}}">
        </form>
        <br><br>

        @include('layouts.message')
    </div>
@endsection