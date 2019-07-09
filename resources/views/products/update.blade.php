@extends('layouts.master')

@section('main-contain')

    <div id="content">
        <p class="small"><a href="{{route('product')}}">back </a></p>
        <h2>Update the product</h2>
        <br>

        <!-- Error Message -->
        @if(session('success'))
            @include('blocks.success')
        @endif
        @if(session('errors'))
            @include('blocks.error')
        @endif

        <!-- Form -->
        <form action="/product/store" method="post">
            @csrf
            <input type="text" name="name" value="{{Input::old('name') ? Input::old('name') : $product->name}}">
            <br><br>
            <input type="number" name="quality"
                   value="{{Input::old('quality') ? Input::old('quality') : $product->quality}}">
            <br><br>
            <select name="category">
                <option value="">Select a category</option>
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}"
                            @if($cat->id == (Input::old('category') ? Input::old('category') : $product->category['id'])) selected @endif
                    >{{$cat->name}}</option>
                @endforeach
            </select>
            <br><br>
            <input type="submit" value="Update">

            <input type="hidden" name="id" value="{{$product->id}}">
        </form>
    </div>

@endsection