@extends('layouts.app')


@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Admin Posts</h1>
        <a href="{{route('posts.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New Post
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($posts as $post)
                <tr class="table-primary">
                    <td scope="row">{{$post->id}}</td>
                    <td><img height="100" src="{{$post->image}}" alt="{{$post->title}}"></td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="{{route('posts.show', $post->id)}}" title="View" class="text-decoration-none">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>
                        <a href="" title="Edit" class="text-decoration-none">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                        </a>
                        <a href="" title="Delete" class="text-decoration-none">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </a>

                    </td>

                </tr>
                @empty
                <tr scope="row">
                    <td>No records in the db yet.</td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>



</div>


@endsection
