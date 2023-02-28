@extends('Backend.Layouts.app')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Simple Tables</h1>
      </div>
      {{-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Simple Tables</li>
        </ol>
      </div> --}}
    </div>
  </div>
</section>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Patient Details</h3>
          </div>
          @include('Backend.includes.flash_message')
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <td>{{$data['patient']->name}}</td>
              </tr>
              <tr>
                <th>Age</th>
                <td>{{$data['patient']->age}}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{$data['patient']->email}}</td>
              </tr>
              <tr>
                <th>Phone</th>
                <td>{{$data['patient']->phone}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection