@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>List of users
            <a class="btn" href="/create-user">Add</a>
        </h4>

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

        <div class="text-right">{{ $users->links() }}</div>
    </div>
@endsection