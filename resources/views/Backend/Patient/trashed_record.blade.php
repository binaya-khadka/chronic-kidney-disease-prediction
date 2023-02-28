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

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Patient Details</h3>
          </div>

          <div class="card-body table-responsive p-0" style="height: auto;">
            @include('Backend.includes.flash_message')
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
                @foreach($data['patients'] as $patient)
                <tr>
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->name}}</td>
                  <td>{{$patient->age}}</td>
                  <td>{{$patient->email}}</td>
                  <td>{{$patient->phone}}</td>
                  {{-- <td>
                    <a href="{{ route('admin.patient.show', $patient->id) }}" class="btn btn-success">Show</a>
                    <form action="{{ route('admin.patient.delete', $patient->id) }}" method="POST"
                      style="display:inline-block">
                      @method("delete")
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td> --}}
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>
@endsection