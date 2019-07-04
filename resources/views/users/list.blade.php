@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>Danh sách người dùng
            <a class="btn" href="{{route('user-add')}}">Add</a>
        </h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Ngày tạo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>john@example.com</td>
                <td>20/10/2010</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>mary@example.com</td>
                <td>20/10/2010</td>
            </tr>
            <tr>
                <td>July</td>
                <td>july@example.com</td>
                <td>20/10/2010</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection