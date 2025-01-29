@extends('detail-layout')
@section('title')
    Payments
@endsection

@section('detail-content')
    <p class="card-text">Enrollment : {{ $resources->enrollment->enroll_no }}</p>
    <p class="card-text">Paid Date : {{ $resources->paid_date }}</p>
    <p class="card-text">Amount : {{ $resources->amount }}</p>
@stop
