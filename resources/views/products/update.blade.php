@extends('layouts.app')

@section('content')
    <div id="content">
        <!-- Header -->
        <h4 class="d-flex margin-hdr-30 padding-hdr-20">
            Update product <a class="btn btn-outline-primary ml-auto p-2" href="{{route('product')}}">Back</a>
        </h4>


        <!-- Error Message -->
    @if(session('success'))
        @include('blocks.success')
    @endif
    @if(session('errors'))
        @include('blocks.error')
    @endif

    <!-- Form -->
        <form action="/product/store" method="post">
            @csrf
            <div class="form-group row"><!-- Name -->
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{old('name') ? old('name') : $product->name}}" required
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row"><!-- Quality -->
                <label class="control-label col-sm-2" for="quality">Quality:</label>
                <div class="col-sm-10">
                    <input type="text" name="quality" value="{{old('quality') ? old('quality') : $product->quality}}" placeholder="Enter your name"
                           class="form-control @error('quality') is-invalid @enderror">
                    @error('quality')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group row"><!-- Category -->
                <label class="control-label col-sm-2" for="category">Category:</label>
                <div class="col-sm-10">
                    <select name="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="">Select a category</option>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}"
                                    @if($cat->id == (Input::old('category') ? Input::old('category') : $product->category['id'])) selected @endif
                            >{{$cat->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row"><!-- Button -->
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            <input type="hidden" name="id" value="{{$product->id}}">
        </form>
    </div>

@endsection