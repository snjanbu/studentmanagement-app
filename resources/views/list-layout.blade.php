@extends('layout')
@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>
  </nav>
  <div class="card shadow border-0">
      <div class="card-title p-3">
        <a href="{{ url('/'.$data['resourceName'] .'/create') }}" class="btn btn-success float-end" title="Add New">
          <i class="las la-plus-circle" aria-hidden="true"></i> Add New
        </a>
      </div>
      <div class="card-body">
        @yield('list-content')
      </div>
  </div>
@endsection