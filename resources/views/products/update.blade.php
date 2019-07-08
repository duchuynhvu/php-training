@extends('layouts.master')

@section('main-contain')

    <div id="content">
        <p class="small"><a href="{{route('product')}}">back </a></p>
        <h2>Update the product</h2>
        <br>
        <form action="/product/store" method="post">
            @csrf
            <input type="text" name="name" value="{{$product->name}}">
            <br><br>
            <input type="number" name="quality" value="{{$product->quality}}">
            <br><br>
            <select name="category">
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}"
                            @if($cat->id == $product->category['id']) selected @endif
                    >{{$cat->name}}</option>
                @endforeach
            </select>
            <br><br>
            <input type="submit" value="Update">

            <input type="hidden" name="id" value="{{$product->id}}">
        </form>
        <br><br>

        @include('layouts.message')
    </div>

@endsection