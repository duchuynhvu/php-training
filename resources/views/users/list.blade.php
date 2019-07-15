@extends('layouts.app')

@section('content')

    <div id="content">
        <!-- Header -->
        <h4 class="d-flex margin-hdr-30">
            List of users <a class="btn btn-outline-primary ml-auto p-2" href="/create-user">Create</a>
        </h4>
        <!-- Table -->
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>ID</th>
                <th>Updated at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/user/update/{{$user->id}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a href="/user/delete/{{$user->id}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end">{{ $users->links() }}</div>
    </div>
@endsection