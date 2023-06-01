@extends('layouts.app')


@section('content')


<div class="container">
    @include('partials.validation_errors')
    <h5 class="text-uppercase text-muted my-4">Edit {{$lightsaber->name}}</h5>

    <form action="{{route('lightsabers.update', $lightsaber->id ) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Saber name here " aria-describedby="nameHelper" value="{{old('name', $lightsaber->name)}}" required>
            <small id="nameHelper" class="text-muted">Type the name of the lightsaber max 50 characters</small>
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>name, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>
        <div class="d-flex gap-4">
            <img width="100" src="{{$lightsaber->image}}" alt="">
            <div class="mb-3 w-100">
                <label for="image" class="form-label">Replace the Image</label>
                <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Saber image here " aria-describedby="imageHelper" value="{{old('image', $lightsaber->image)}}">
                <small id="imageHelper" class="text-muted">Type the image of the lightsaber max 255 characters</small>
                @error('image')
                <div class="alert alert-danger" role="alert">
                    <strong>Image, Error: </strong>{{$message}}
                </div>

                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Saber price here " aria-describedby="priceHelper" value="{{old('price', $lightsaber->price)}}">
            <small id="priceHelper" class="text-muted">Type the price of the lightsaber max 50 characters</small>
            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>price, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input @error('in_stock') is-invalid @enderror" type="checkbox" value="{{old('in_stock', $lightsaber->in_stock)}}" id="in_stock" name='in_stock' {{$lightsaber->in_stock  == '1' ? 'checked' : ''}}>
            <label class="form-check-label" for="in_stock">
                In Stock
            </label>
        </div>
        @error('in_stock')
        <div class="alert alert-danger" role="alert">
            <strong>in_stock, Error: </strong>{{$message}}
        </div>

        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">{{old('description', $lightsaber->description)}}</textarea>
        </div>

        @error('description')
        <div class="alert alert-danger" role="alert">
            <strong>description, Error: </strong>{{$message}}
        </div>

        @enderror

        <button type="submit" class="btn btn-dark w-100 my-4">Update</button>

    </form>

</div>


@endsection