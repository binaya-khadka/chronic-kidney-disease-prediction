@extends('Frontend.Layouts.app')

@section('content')
<div class="container container2">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Analysis Form</h5>
          <form>
            <div class="row">
              <div class="col-md-6">
                <label for="fever" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age">
              </div>
              <div class="col-md-6">
                <label for="blood-pressure" class="form-label">Blood Pressure</label>
                <input type="text" class="form-control" id="blood-pressure" name="bp">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="blood-pressure" class="form-label">Specific Gravity</label>
                <select class="form-control" id="specific-gravity" name="sg">
                  <option value="1.005">1.005</option>
                  <option value="1.010">1.010</option>
                  <option value="1.015">1.015</option>
                  <option value="1.020">1.020</option>
                  <option value="1.025">1.025</option>
                </select>
              </div>
           
              <div class="col-md-6">
                <label for="albumin" class="form-label">Albumin</label>
                <select class="form-control" id="albumin" name="al">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sugar" class="form-label">Sugar</label>
                <select class="form-control"id="sugar" name="su">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="red-blood-cells" class="form-label">Red Blood Cells</label>
                <select class="form-control" id="red-blood-cells" name="rbc">
                  <option value="0">Normal</option>
                  <option value="1">Abnormal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="pus-cell" class="form-label">Pus Cell</label>
                <select class="form-control" id="pus-cell" name="pc">
                  <option value="0">Normal</option>
                  <option value="1">Abnormal</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="pes-cell-clumps" class="form-label">Pes Cell Clumps</label>
                <input type="text" class="form-control" id="pes-cell-clumps" name="pcc">
                <select class="form-control" id="pes-cell-clumps" name="pcc">
                  <option value="0">Npt Present </option>
                  <option value="1">Present</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="bacteria" class="form-label">Bacteria</label>
                <select class="form-control" id="bacteria" name="ba">
                  <option value="0">Npt Present </option>
                  <option value="1">Present</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="blood-glucose-random" class="form-label">Blood Glucose Random</label>
                <input type="text" class="form-control" id="blood-glucose-random" name="bgr">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="blood-urea" class="form-label">Blood Urea</label>
                <input type="text" class="form-control" id="blood-urea" name="bu">
              </div>
              <div class="col-md-6">
                <label for="serum-creatinine" class="form-label">Serum Creatinine</label>
                <input type="text" class="form-control" id="serum-creatinine" name="sc">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Sodium</label>
                <input type="text" class="form-control" id="sodium" name="sod">
              </div>
              <div class="col-md-6">
                <label for="sodium" class="form-label">Pottasium</label>
                <input type="text" class="form-control" id="pottasium" name="pot">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Haemoglobin</label>
                <input type="text" class="form-control" id="haemoglobin" name="hemo">
              </div>
              <div class="col-md-6">
                <label for="sodium" class="form-label">Packed cell Volume</label>
                <input type="text" class="form-control" id="packed-cell-volume" name="pcv">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">White Blood Cell Count</label>
                <input type="text" class="form-control" id="white-blood-cell-count" name="wc">
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Red Blood Cell Count</label>
                <input type="text" class="form-control" id="red-blood-cell-count" name="rc">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Hypertension</label>
                <select class="form-control" id="hypertension" name="htn">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Diabetes Mellitus</label>
                <select class="form-control" id="diabetes-mellitus" name="dm">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Coronary Arrey Disease</label>
                <select class="form-control" id="coronary-arrey-diasease" name="cad">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Appetite</label>
                <select class="form-control" id="appetite" name="appet">
                  <option value="0">Poor</option>
                  <option value="1">Good</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="sodium" class="form-label">Pedal Edema</label>
                <select class="form-control" id="pedal-edema" name="pe">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="sodium" class="form-label">Anemia</label>
                <select class="form-control" id="anemia" name="ane">
                  <option value="0">Yes</option>
                  <option value="1">No</option>
                </select>
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