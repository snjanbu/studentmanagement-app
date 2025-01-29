@extends('detail-layout')
@section('title')
    Enrollments
@endsection

@section('detail-content')
    <p class="card-text">Enrollment No : {{ $resources->enroll_no }}</p>
    <p class="card-text">Batch : {{ $resources->batch->name }}</p>
    <p class="card-text">Student : {{ $resources->student->name }}</p>
    <p class="card-text">Join Date : {{ $resources->join_date }}</p>
    <p class="card-text">Fee : {{ $resources->fee }}</p>
@stop
