@extends('edit-layout')
@section('edit-content')
    <form action="{{ url('students/' . $resources->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <div class="row text-start">
            <div class="col-md-6">
                <input type="hidden" name="id" id="id" value="{{ $resources->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $resources->name }}" class="form-control"></br>
            </div>
            <div class="col-md-6">
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{ $resources->address }}"
                    class="form-control"></br>
            </div>
            <div class="col-md-6">
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{ $resources->mobile }}"
                    class="form-control"></br>
            </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success float-end"></br>
    </form>

@stop
