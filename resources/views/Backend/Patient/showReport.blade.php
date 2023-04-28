@extends('Backend.Layouts.app')
@include('HelperFunction.function')

@section('title', 'Analysis Result')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Patient Table Details</h1>
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
                        <th>Result</th>
                        <th>Age</th>
                        <th>Blood Pressure</th>
                        <th>Specific Gravity</th>
                        <th>Albumin</th>
                        <th>Sugar</th>
                        <th>Red Blood Cells</th>
                        <th>Pus Cell</th>
                        <th>Pus Cell Clumps</th>
                        <th>Bacteria</th>
                        <th>Blood Glucose Random</th>
                        <th>Blood Urea</th>
                        <th>Serum Creatinine</th>
                        <th>Sodium</th>
                        <th>Potassium</th>
                        <th>Hemoglobin</th>
                        <th>Packed Cell Volume</th>
                        <th>White Blood Cell Count</th>
                        <th>Red Blood Cell Count</th>
                        <th>Hypertension</th>
                        <th>Diabetes Mellitus</th>
                        <th>Coronary Artery Disease</th>
                        <th>Appetite</th>
                        <th>Pedal Edema</th>
                        <th>Anemia</th>
                      </tr>
                    </thead>
                        <td style="color: tomato; font-weight: 600;">{{ getClassLabel($report['data']->class) }}</td>
                        <td>{{ $report['data']->age }}</td>
                        <td>{{ $report['data']->bp }}</td>
                        <td>{{ $report['data']->sg }}</td>
                        <td>{{ $report['data']->al }}</td>
                        <td>{{ $report['data']->su }}</td>
                        <td>{{ $report['data']->rbc }}</td>
                        <td>{{ $report['data']->pc }}</td>
                        <td>{{ $report['data']->pcc }}</td>
                        <td>{{ $report['data']->ba }}</td>
                        <td>{{ $report['data']->bgr }}</td>
                        <td>{{ $report['data']->bu }}</td>
                        <td>{{ $report['data']->sc }}</td>
                        <td>{{ $report['data']->sod }}</td>
                        <td>{{ $report['data']->pot }}</td>
                        <td>{{ $report['data']->hemo }}</td>
                        <td>{{ $report['data']->pcv }}</td>
                        <td>{{ $report['data']->wc }}</td>
                        <td>{{ $report['data']->rc }}</td>
                        <td>{{ getYesNoLabel($report['data']->htn) }}</td>
                        <td>{{ getYesNoLabel($report['data']->dm) }}</td>
                        <td>{{ getYesNoLabel($report['data']->cad) }}</td>
                        <td>{{ $report['data']->appet }}</td>
                        <td>{{ getYesNoLabel($report['data']->pe) }}</td>
                        <td>{{ getYesNoLabel($report['data']->ane) }}</td>
                    <tbody>
                    </tbody>
                  </table>
                </div>
      
              </div>
      
            </div>
          </div>
        </div>
      </section>
@endsection
