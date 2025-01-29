@extends('detail-layout')
@section('title')
    Students
@endsection

@section('detail-content')
    <p class="card-title">Name : {{ $resources->name }}</p>
    <p class="card-text">Address : {{ $resources->address }}</p>
    <p class="card-text">Mobile : {{ $resources->mobile }}</p>
@stop
