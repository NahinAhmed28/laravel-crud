@extends('Datatype.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{route('datatype.store')}}" method="post">
                @csrf
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"></br>

                <label>Email</label><br>
                <input type="email" name="email" id="email" class="form-control"></br>

                <label>Phone</label><br>
                <input type="text" name="phone" id="phone" class="form-control"></br>

                <label><strong>Education</strong></label><br>
                <input type="checkbox" value="ssc" name="education[]"  class="form-check-input mx-3">SSC
                <input type="checkbox" value="hsc" name="education[]"  class="form-check-input mx-3">HSC
                <input type="checkbox" value="graduate" name="education[]"  class="form-check-input mx-3">Graduate
                </br>

{{--                <label>Confirmed</label><br>--}}
{{--                <input type="checkbox" name="confirmed[]" id="confirmed" value="yes" class="form-check-input mx-3"></br>--}}
{{--                <label>Votes</label><br>--}}
{{--                <input type="number" name="votes" id="votes"  class="form-check-input mx-3"></br>--}}

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
