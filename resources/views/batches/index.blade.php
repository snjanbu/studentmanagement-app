@extends('list-layout')
@section('title')
    Batches
@endsection
@section('list-content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Course Name</th>
                    <th>Start Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($batches as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->course->name }}</td>
                    <td>{{ $item->start_date }}</td>
                    <td>
                        @include('actions')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection