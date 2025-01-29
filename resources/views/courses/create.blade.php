@extends('create-layout')
@section('create-content')

    <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Duration</label></br>
                <input type="text" name="duration" id="duration" class="form-control" required></br>
            </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-end"></br>
    </form>


@stop
