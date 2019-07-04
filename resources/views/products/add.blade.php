@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('product-list')}}">back </a></p>
        <h2>Add a new product</h2>
        <br>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter product name">
            <br><br>
            <input type="number" name="quality" placeholder="Enter quality">
            <br><br>
            <select>
                <option>Telephone</option>
                <option>Laptop</option>
                <option>Computer</option>
            </select>
            <br><br>
            <input type="submit" value="Add">
        </form>
    </div>
@endsection