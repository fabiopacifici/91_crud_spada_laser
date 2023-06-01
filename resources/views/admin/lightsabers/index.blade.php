@extends('layouts.app')


@section('content')

<div class="container">


    @include('partials.session_message');


    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Admin Sabers</h1>
        <a href="{{route('lightsabers.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New Saber
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
                    <th>Name</th>
                    <th>Price</th>
                    <th>In Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($sabers as $saber)
                <tr class="table-primary">
                    <td scope="row">{{$saber->id}}</td>
                    <td><img height="100" src="{{$saber->image}}" alt="{{$saber->name}}"></td>
                    <td>{{$saber->name}}</td>
                    <td>{{$saber->price}}</td>
                    <td>{{$saber->in_stock}}</td>
                    <td>

                        <a href="{{route('lightsabers.show', $saber->id)}}" title="View" class="btn btn-primary">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </a>
                        <a href="{{route('lightsabers.edit', $saber->id)}}" title="Edit" class="btn btn-secondary">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>

                        </a>





                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$saber->id}}">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modal-{{$saber->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$saber->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{$saber->id}}">Delete {{$saber->name}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this element? This is a desctructive action.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('lightsabers.destroy', $saber->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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