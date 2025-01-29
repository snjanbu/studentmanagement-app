@extends('list-layout')
@section('title')
    Courses
@endsection
@section('list-content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Syllabus</th>
                    <th>Duration</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($courses as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->syllabus }}</td>
                    <td>{{ $item->duration }}</td>
                    <td>
                        @include('actions')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection