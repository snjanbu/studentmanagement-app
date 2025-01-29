@extends('list-layout')
@section('title')
    Enrollments
@endsection
@section('list-content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Enrollment No</th>
                    <th>Batch Id</th>
                    <th>Student Id</th>
                    <th>Join Date</th>
                    <th>Fee</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($enrollments as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->enroll_no }}</td>
                    <td>{{ $item->batch->name }}</td>
                    <td>{{ $item->student->name }}</td>
                    <td>{{ $item->join_date }}</td>
                    <td>{{ $item->fee }}</td>
                    <td>
                        @include('actions')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection