@extends('Datatype.layout')
@section('content')
    <div class="card">
        <div class="card-header">Index Page</div>
        <div class="card-body">

            <a href="{{route('datatype.create') }}" class="btn btn-success btn-sm" title="Add New DataType">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>

              <h1>DataType</h1>

        </div>
    </div>
@stop
