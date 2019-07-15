@extends('layouts.app')

@section('content')
    <div id="content">

        <!-- Header -->
        <h4 class="d-flex margin-hdr-30 padding-hdr-20">
            Update category <a class="btn btn-outline-primary ml-auto p-2" href="{{route('category')}}">Back</a>
        </h4>

        <!-- Error Message -->
        @if(session('success')) @include('blocks.success') @endif
        @if(session('errors')) @include('blocks.error') @endif

        <!-- Form -->
        <form class="form-horizontal" action="/category/store" method="post">
            @csrf
            <div class="form-group row"><!-- Name -->
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name') ? old('name') : $cat->name}}" placeholder="Enter category name"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row"><!-- Button -->
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>

            <input type="hidden" name="id" value="{{$cat->id}}">
        </form>
    </div>
@endsection