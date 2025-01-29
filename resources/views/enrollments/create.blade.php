@extends('create-layout')
@section('create-content')

    <form action="{{ url('enrollments') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label>Enrollment No</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Batch Id</label></br>
                <select name="batch_id" id="batch_id" class="form-select" required>
                    @foreach ($batches as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Student Id</label></br>
                <select name="student_id" id="student_id" class="form-select" required>
                    @foreach ($students as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Fee</label></br>
                <input type="text" name="fee" id="fee" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Join Date</label></br>
                <input type="date" name="join_date" id="join_date" class="form-control" required></br>
            </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-end"></br>
    </form>
@stop
