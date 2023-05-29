@extends('layouts.app')


@section('content')

<div class="container">
    <img src="{{$lightsaber->image}}" alt="{{$lightsaber->name}}" class="img-fluid">
    <h1>{{$lightsaber->name}}</h1>
    <span>{{$lightsaber->price}}</span>
    <span>{{$lightsaber->in_stock}}</span>
    <span>{{$lightsaber->description}}</span>

</div>


@endsection
