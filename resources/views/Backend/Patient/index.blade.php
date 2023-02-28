@extends('Backend.Layouts.app')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Patient Table</h1>
      </div>

    </div>
  </div>
</section>
{{-- @foreach($patients['datas'] as $patient)
@dump($patient->name)
@endforeach --}}
<div class="row" style="padding: 0 20px;">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Patient Details</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body table-responsive p-0" style="height: auto;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Age</th>
              <th>Email</th>
              <th>Phone</th>
              {{-- <th>Actions</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($patients['datas'] as $patient)
            <tr>
              <td>{{$patient->id}}</td>
              <td>{{$patient->name}}</td>
              <td>{{$patient->age}}</td>
              <td>{{$patient->email}}</td>
              <td>{{$patient->phone}}</td>
              {{-- <td>
                <a href="" class="btn btn-success">Show</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>

  </div>
</div>
@endsection