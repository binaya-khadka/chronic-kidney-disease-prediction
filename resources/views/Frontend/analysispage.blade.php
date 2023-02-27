@extends('Frontend.Layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Analysis Form</h5>
          <form>
            <div class="row">
              <div class="col-md-6">
                <label for="fever" class="form-label">Fever</label>
                <input type="text" class="form-control" id="fever">
              </div>
              <div class="col-md-6">
                <label for="blood-pressure" class="form-label">Blood Pressure</label>
                <input type="text" class="form-control" id="blood-pressure">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="specific-gravity" class="form-label">Specific Gravity</label>
                <input type="text" class="form-control" id="specific-gravity">
              </div>
              <div class="col-md-6">
                <label for="albumin" class="form-label">Albumin</label>
                <input type="text" class="form-control" id="albumin">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sugar" class="form-label">Sugar</label>
                <input type="text" class="form-control" id="sugar">
              </div>
              <div class="col-md-6">
                <label for="red-blood-cells" class="form-label">Red Blood Cells</label>
                <input type="text" class="form-control" id="red-blood-cells">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="pus-cell" class="form-label">Pus Cell</label>
                <input type="text" class="form-control" id="pus-cell">
              </div>
              <div class="col-md-6">
                <label for="pes-cell-clumps" class="form-label">Pes Cell Clumps</label>
                <input type="text" class="form-control" id="pes-cell-clumps">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="bacteria" class="form-label">Bacteria</label>
                <input type="text" class="form-control" id="bacteria">
              </div>
              <div class="col-md-6">
                <label for="blood-glucose-random" class="form-label">Blood Glucose Random</label>
                <input type="text" class="form-control" id="blood-glucose-random">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="blood-urea" class="form-label">Blood Urea</label>
                <input type="text" class="form-control" id="blood-urea">
              </div>
              <div class="col-md-6">
                <label for="serum-creatinine" class="form-label">Serum Creatinine</label>
                <input type="text" class="form-control" id="serum-creatinine">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Sodium</label>
                <input type="text" class="form-control" id="sodium">
              </div>
              <div class="col-md-6">
                <label for="sodium" class="form-label">Pottasium</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Haemoglobin</label>
                <input type="text" class="form-control" id="sodium">
              </div>
              <div class="col-md-6">
                <label for="sodium" class="form-label">Packed cell Volume</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">White Blood Cell Count</label>
                <input type="text" class="form-control" id="sodium">
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Red Blood Cell Count</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Hypertension</label>
                <input type="text" class="form-control" id="sodium">
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Diabetes Mellitus</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Coronary Arrey Disease</label>
                <input type="text" class="form-control" id="sodium">
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Appetite</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Pedal Edema</label>
                <input type="text" class="form-control" id="sodium">
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Anemia</label>
                <input type="text" class="form-control" id="sodium">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Analyze</button>
                <button type="reset" class="btn btn-danger">Clear</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection