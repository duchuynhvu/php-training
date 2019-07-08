@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>List of products
            <a class="btn" href="{{route('product.create')}}">Add</a>
        </h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>ID</th>
                <th>Quality</th>
                <th>Category</th>
                <th>Created by</th>
                <th>Updated at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/product/update/{{$product->id}}">{{$product->name}}</a></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->quality}}</td>
                    <td>{{$product->category['name']}}</td>
                    <td>{{$product->user['name']}}</td>
                    <td>{{$product->created_at}}</td>
                    <td><a href="/product/delete/{{$product->id}}">Delete</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <div class="text-right">{{ $products->links() }}</div>
    </div>
@endsection