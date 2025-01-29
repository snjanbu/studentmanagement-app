@extends('edit-layout')
@section('edit-content')

    <form action="{{ url('courses/' . $resources->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="id" id="id" value="{{ $resources->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $resources->name }}" class="form-control"
                    required></br>
            </div>
            <div class="col-md-6">
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" value="{{ $resources->syllabus }}" class="form-control"
                    required></br>
            </div>
            <div class="col-md-6">
                <label>Duration</label></br>
                <input type="text" name="duration" id="duration" value="{{ $resources->duration }}" class="form-control"
                    required></br>
            </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success float-end"></br>
    </form>

@stop
