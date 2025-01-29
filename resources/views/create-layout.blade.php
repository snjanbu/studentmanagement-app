@extends('layout')
@section('content')
    <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ $data['resourceName'] }}/">{{ ucfirst($data['resourceName']) }}</a></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 mx-auto text-start">
            <div class="card border-0 shadow rounded">
                <h2 class="p-2 bg-theme text-start start-space">{{ ucfirst($data['singularResource']) }} Information</h2>
                <div class="card-body">
                    @yield('create-content')
                </div>
            </div>
        </div>
    </div>
@stop
