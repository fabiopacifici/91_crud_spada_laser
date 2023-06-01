@extends('layouts.app')


@section('content')


<div class="container">

    @include('partials.validation_errors')

    <h5 class="text-uppercase text-muted my-4">Add a new Lightsaber</h5>

    <form action="{{route('lightsabers.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Saber name here " aria-describedby="nameHelper" value="{{old('name')}}" required>


            <small id="nameHelper" class="text-muted">Type the name of the lightsaber max 50 characters</small>
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>Name, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Saber image here " aria-describedby="imageHelper" value="{{old('image')}}">
            <small id="imageHelper" class="text-muted">Type the image of the lightsaber max 255 characters</small>
            @error('image')
            <div class="alert alert-danger" role="alert">
                <strong>Image, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Saber price here " aria-describedby="priceHelper" value="{{old('price')}}">
            <small id="priceHelper" class="text-muted">Type the price of the lightsaber characters</small>
            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>Price, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input @error('in_stock') is-invalid @enderror" type="checkbox" value="{{old('in_stock', '1')}}" id="in_stock" name='in_stock' checked>
            <label class="form-check-label" for="in_stock">
                In Stock
            </label>
        </div>
        @error('in_stock')
        <div class="alert alert-danger" role="alert">
            <strong>In stock, Error: </strong>{{$message}}
        </div>

        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">{{old('description')}}</textarea>
        </div>
        @error('description')
        <div class="alert alert-danger" role="alert">
            <strong>Description, Error: </strong>{{$message}}
        </div>

        @enderror

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection