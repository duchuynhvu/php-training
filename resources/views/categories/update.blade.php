@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('category-list')}}">back </a></p>
        <h2>Update the category</h2>
        <br>
        <form action="" method="post">
            <input type="text" name="name" placeholder="">
            <br><br>
            <input type="submit" value="Update">
        </form>
    </div>
@endsection