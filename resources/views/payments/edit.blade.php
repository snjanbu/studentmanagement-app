@extends('edit-layout')
@section('edit-content')

    <form action="{{ url('payments/' . $resources->id) }}" method="post">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{ $resources->id }}" id="id" />
        <div class="row">
            <div class="col-md-6">
                <label>Enrollment</label></br>
                <select name="enrollment_id" id="enrollment_id" class="form-select">
                    @foreach ($enrollments as $id => $name)
                        <option value="{{ $id }}" @selected($id == $resources->enrollment_id)>{{ $name }}</option>
                    @endforeach
                </select><br />
            </div>
            <div class="col-md-6">
                <label>Paid Date</label></br>
                <input type="date" name="paid_date" id="paid_date" class="form-control"
                    value="{{ $resources->paid_date }}"></br>
            </div>
            <div class="col-md-6">
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" class="form-control"
                    value="{{ $resources->amount }}"></br>
            </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success float-end"></br>
    </form>


@stop
