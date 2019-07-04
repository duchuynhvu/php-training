@extends('layouts.master')

@section('main-contain')

    <div id="content">
        <p class="small"><a href="{{route('product-list')}}">back </a></p>
        <h2>Update the product</h2>
        <br>
        <form action="" method="post">
            <input type="text" name="name" placeholder="">
            <br><br>
            <input type="number" name="quality" placeholder="">
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