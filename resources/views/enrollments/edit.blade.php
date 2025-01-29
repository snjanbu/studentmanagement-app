@extends('edit-layout')
@section('edit-content')

    <form action="{{ url('enrollments/' . $resources->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{ $resources->id }}" id="id" />
        <div class="row">
            <div class="col-12 col-md-6">
                <label>Enrollment No</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control"
                    value="{{ $resources->enroll_no }}" required></br>
            </div>
            <div class="col-12 col-md-6">
                <label>Batch</label></br>
                <select name="batch_id" id="batch_id" class="form-select" required>
                    @foreach ($batches as $id => $name)
                        <option value="{{ $id }}" @selected($id == $resources->batch_id)>{{ $name }}
                        </option>
                    @endforeach
                </select><br />

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <label>Student</label></br>
                <select name="student_id" id="student_id" class="form-select" required>
                    @foreach ($students as $id => $name)
                        <option value="{{ $id }}" @selected($id == $resources->student_id)>{{ $name }}
                        </option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6 col-12">
                <label>Fee</label></br>
                <input type="text" name="fee" id="fee" class="form-control" value="{{ $resources->fee }}"
                    required></br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Join Date</label></br>
                <input type="date" name="join_date" id="join_date" class="form-control"
                    value="{{ $resources->join_date }}" required></br>
            </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success float-end"></br>
    </form>
@stop
