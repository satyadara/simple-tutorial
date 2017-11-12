@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ route('item.create') }}"><button class="btn btn-success">CREATE</button></a>
                    <table class="table table-bordered">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td><a href="{{ route('item.show',$d->id ) }}">{{ $d->name }}</a></td>
                            <td>{{ $d->stock }}</td>
                            <td>{{ $d->price }}</td>
                            <td>
                                <a href="{{ route('item.edit',$d->id ) }}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <a href="{{ route('item.delete',$d->id ) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection