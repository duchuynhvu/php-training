@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>List of categories
            <a class="btn" href="{{route('category-add')}}">Add</a>
        </h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th># Product(s)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Telephone</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Laptop</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Computer</td>
                <td>10</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection