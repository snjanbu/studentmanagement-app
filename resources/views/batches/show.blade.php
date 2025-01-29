@extends('detail-layout')
@section('title')
    Batches
@endsection

@section('detail-content')
    <p class="card-text">Name : {{ $resources->name }}</p>
    <p class="card-text">Course : {{ $resources->course->name }}</p>
    <p class="card-text">Start Date : {{ $resources->start_date }}</p>
@stop
