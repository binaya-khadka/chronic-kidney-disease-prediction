@extends('Backend.Layouts.app')
@include('HelperFunction.function')

@section('title', 'Patient Info')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1></h1>
      </div>
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
                <th>Email</th>
                <td>{{$data['patient']->email}}</td>
              </tr>
              <tr>
                <th>Total Number of Analysis</th>
                <td>{{$analysis->count()}}</td>
              </tr>
              @if($analysis->first())
                <tr>
                  <th>Latest Result</th>
                  <td style="color: tomato; font-weight: 700;">
                      {{ getClassLabel($analysis->last()->class) }}
                  </td>
                </tr>
              @endif  
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection