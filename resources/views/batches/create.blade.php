@extends('create-layout')
@section('create-content')

    <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Course Name</label></br>
                <select name="course_id" id="course_id" class="form-select" required>
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Start Date</label></br>
                <input type="date" name="start_date" id="start_date" class="form-control" required></br>
            </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-end"></br>
    </form>


@stop
