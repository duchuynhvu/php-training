@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('product')}}">back </a></p>
        <h2>Add a new product</h2>
        <br>
        <form action="/product/store" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter product name">
            <br><br>
            <input type="number" name="quality" placeholder="Enter quality">
            <br><br>
            <select name="category">
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            <br><br>
            <input type="submit" value="Add">
        </form>
        <br><br>

        @include('layouts.message')
    </div>
@endsection