@extends('edit-layout')
@section('edit-content')

    <form action="{{ url('batches/' . $resources->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{ $resources->id }}" id="id" />
        <div class="row">
            <div class="col-md-6">
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $resources->name }}" class="form-control"
                    required></br>
            </div>
            <div class="col-md-6">
                <label>Course Name</label></br>
                <select name="course_id" id="course_id" class="form-select" required>
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}" @selected($id == $resources->course_id)>{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Start Date</label></br>
                <input type="date" name="start_date" id="start_date" value="{{ $resources->start_date }}"
                    class="form-control" required></br>
            </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success float-end"></br>
    </form>


@stop
