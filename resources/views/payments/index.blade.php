@extends('list-layout')
@section('title')
    Payments
@endsection
@section('list-content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Enrollment</th>
                    <th>Paid Date</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($payments as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->enrollment->enroll_no }}</td>
                    <td>{{ $item->paid_date }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>
                        @include('actions')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection