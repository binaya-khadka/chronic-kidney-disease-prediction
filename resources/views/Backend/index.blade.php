@extends('Backend.Layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif
    <span class="text text-success" style="font-weight: 700;">
      {{ __('You are logged in!') }}
    </span>
  </div>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$total_patients}}</h3>
        <p>Total Patients</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
@endsection