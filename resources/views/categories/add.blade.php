@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <p class="small"><a href="{{route('category')}}">back </a></p>
        <h2>Add a new category</h2>
        <br>

        <!-- Error Message -->
    @if(session('success'))
        @include('blocks.success')
    @endif
    @if(session('errors'))
        @include('blocks.error')
    @endif

    <!-- Form -->
        <form action="/category/store" method="post">
            @csrf
            <input type="text" name="name" value="{{Input::old('name')}}" placeholder="Enter category name" autofocus>
            <br><br>
            <input type="submit" value="Add">
        </form>
    </div>
@endsection