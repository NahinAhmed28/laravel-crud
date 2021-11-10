@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ route('Datatype.store') }}" method="post">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label><br>
        <input type="text" name="email" id="address" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
