@extends('detail-layout')
@section('title')
    Teachers
@endsection

@section('detail-content')
    <p class="card-text">Name : {{ $resources->name }}</p>
    <p class="card-text">Address : {{ $resources->address }}</p>
    <p class="card-text">Mobile : {{ $resources->mobile }}</p>
@stop
