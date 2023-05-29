@extends('layouts.app')


@section('content')

<div class="container py-5">
    <img src="{{$post->image}}" alt="{{$post->title}}" class="img-fluid">
    <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->body}}</p>
    </div>

</div>


@endsection
