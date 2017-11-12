@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group col-md-4">
                            <input class="form-control" type="text" placeholder="Item Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input class="form-control" type="number" placeholder="Item Stock" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input class="form-control" type="number" placeholder="Item Price" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection