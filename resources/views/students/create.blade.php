@extends('create-layout')
@section('create-content')


    <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
            </div>
            <div class="col-md-6">
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
            </div>
            <div class="col-md-6">
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
            </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-end"></br>
    </form>


@stop
