@extends('list-layout')
@section('title')
    Teachers
@endsection
@section('list-content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($teachers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                        @include('actions')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection