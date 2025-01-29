@extends('create-layout')
@section('create-content')

    <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6">
                <label>Enrollment</label></br>
                <select name="enrollment_id" id="enrollment_id" class="form-select" required>
                    @foreach ($enrollments as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Paid Date</label></br>
                <input type="date" name="paid_date" id="paid_date" class="form-control" required></br>
            </div>
            <div class="col-md-6">
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" class="form-control" required></br>
            </div>
        </div>
        <input type="submit" value="Save" class="btn btn-success float-end"></br>
    </form>

@stop
