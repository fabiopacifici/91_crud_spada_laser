@extends('layouts.app')


@section('content')


<div class="container">
    <h5 class="text-uppercase text-muted my-4">Add a new Lightsaber</h5>

    <form action="{{route('lightsabers.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Saber name here " aria-describedby="nameHelper" required>
            <small id="nameHelper" class="text-muted">Type the name of the lightsaber max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Saber image here " aria-describedby="imageHelper">
            <small id="imageHelper" class="text-muted">Type the image of the lightsaber max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Saber price here " aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type the price of the lightsaber max 50 characters</small>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="in_stock" name='in_stock' checked>
            <label class="form-check-label" for="in_stock">
                In Stock
            </label>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Saber description here " aria-describedby="descriptionHelper">
            <small id="descriptionHelper" class="text-muted">Type the description of the lightsaber max 50 characters</small>
        </div>

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection
