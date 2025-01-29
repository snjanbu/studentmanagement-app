@extends('detail-layout')
@section('title')
    Courses
@endsection

@section('detail-content')
    <p class="card-text">Name : {{ $resources->name }}</p>
    <p class="card-text">Address : {{ $resources->syllabus }}</p>
    <p class="card-text">Mobile : {{ $resources->duration }}</p>
@stop
