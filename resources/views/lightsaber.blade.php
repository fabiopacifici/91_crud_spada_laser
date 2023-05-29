@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$lightsaber->image}}" alt="{{$lightsaber->name}}" class="img-fluid">
        </div>
        <div class="col">
            <h1>{{$lightsaber->name}}</h1>
            <div> <strong>Price: </strong>{{$lightsaber->price}}</div>
            <div> <strong>Availability: </strong>{{$lightsaber->in_stock === '1' ? 'in stock' : 'out of stock'}}</d>
                <div>
                    <p>{{$lightsaber->description}}</p>
                </div>
            </div>
        </div>

    </div>


    @endsection
