@extends('layouts.app')

@section('content')
    <div id="content">
        <!-- Header -->
        <h4 class="d-flex margin-hdr-30">
            List of categories <a class="btn btn-outline-primary ml-auto p-2" href="{{route('category.create')}}">Create</a>
        </h4>
        <!-- Table -->
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

        <div class="d-flex justify-content-end">{{$cats->links() }}</div>
    </div>
@endsection