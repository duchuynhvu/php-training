@extends('layouts.master')

@section('main-contain')
    <div id="content">
        <h4>List of products
            <a class="btn" href="{{route('product-add')}}">Add</a>
        </h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quality</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><a href="{{route('product-update')}}">iPhone 6</a></td>
                <td>11</td>
                <td>Telephone</td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="{{route('product-update')}}">iPhone 7</a></td>
                <td>9</td>
                <td>Telephone</td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="{{route('product-update')}}">Samsung Note 6</a></td>
                <td>11</td>
                <td>Telephone</td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="{{route('product-update')}}">Dell Latitude 6400</a></td>
                <td>11</td>
                <td>Laptop</td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="{{route('product-update')}}">Dell Vostro 1500</a></td>
                <td>11</td>
                <td>Laptop</td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="{{route('product-update')}}">Mac</a></td>
                <td>20</td>
                <td>Computer</td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="{{route('product-update')}}">Lenovo</a></td>
                <td>20</td>
                <td>Computer</td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="{{route('product-update')}}">Sony Vios</a></td>
                <td>20</td>
                <td>Computer</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection