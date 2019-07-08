@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>List of categories
            <a class="btn" href="{{route('category.create')}}">Add</a>
        </h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>ID</th>
                <th>#Product(s)</th>
                <th>Updated at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/category/update/{{$cat->id}}">{{$cat->name}}</a></td>
                    <td>{{$cat->id}}</td>
                    <td>{{count($cat->products)}}</td>
                    <td>{{$cat->updated_at}}</td>
                    <td><a href="/category/delete/{{$cat->id}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-right">{{$cats->links() }}</div>
    </div>
@endsection