@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
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
                        <tr><a href="#">{{ $d->id }}</a></tr>
                        <tr>{{ $d->name }}</tr>
                        <tr>{{ $d->stock }}</tr>
                        <tr>{{ $d->price }}</tr>
                        <tr>
                            <a href="#">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="#">
                                <button class="btn btn-danger">Delete</button>
                            </a>
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