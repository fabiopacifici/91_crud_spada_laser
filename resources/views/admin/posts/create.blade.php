@extends('layouts.app')


@section('content')


<div class="container">
    <h5 class="text-uppercase text-muted my-4">Add a new Post</h5>

    <form action="{{route('posts.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Saber title here " aria-describedby="titleHelper" required>
            <small id="titleHelper" class="text-muted">Type the title of the lightsaber max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Post image here " aria-describedby="imageHelper">
            <small id="imageHelper" class="text-muted">Type the image of the Post max 200 characters</small>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" name="body" id="body" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection
