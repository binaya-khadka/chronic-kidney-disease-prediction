<!DOCTYPE html>
<html>
<head>
    <title>CKD Prediction</title>
</head>
<body>
<h1>CKD Prediction</h1>
<form action="{{ route('predict') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <label for="fever" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="50">
      </div>
      <div class="col-md-6">
        <label for="blood-pressure" class="form-label">Blood Pressure</label>
        <input type="number" class="form-control" id="blood-pressure" name="bp" value="80">
      </div>
    </div>
    <div class="row">
      
      <div class="col-md-6">
        <label for="albumin" class="form-label">Albumin</label>
        <select class="form-control" id="albumin" name="al" value="0">
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
        <label for="specific-gravity">specific-gravity</label>
        <select class="form-control" name="sg" id="sg" value="1.015">
          <option value="1.005">1.005</option>
          <option value="1.01">1.01</option>
          <option value="1.015">1.015</option>
          <option value="1.02">1.02</option>  
          <option value="1.025">1.025</option>  
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sugar" class="form-label">Sugar</label>
        <select class="form-control"id="sugar" name="su" value="1">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="col-md-6">
        {{-- <label for="red-blood-cells" class="form-label">Red Blood Cells</label>
        <input type="text" class="form-control" id="red-blood-cells" name="rbc"> --}}
        <label for="sugar" class="form-label">Red Blood Cell</label>
        <select class="form-control" id="rbc" name="rbc" value="1">
          <option value="normal">normal</option>
          <option value="abnormal">abnormal</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="pus-cell" class="form-label">Pus Cell</label>
        <select name="pc" id="pc" class="form-control" value="0">
          <option value="normal">normal</option>
          <option value="abnormal">abnormal</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="pes-cell-clumps" class="form-label">Pes Cell Clumps</label>
        <select name="pcc" id="pcc" class="form-control" value="0">
          <option value="present">present</option>
          <option value="not_present">not_present</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="bacteria" class="form-label">Bacteria</label>
        <select name="ba" id="ba" class="form-control" value="0">
          <option value="present">present</option>
          <option value="not_present">not_present</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="blood-glucose-random" class="form-label">Blood Glucose Random</label>
        <input type="number" class="form-control" id="blood-glucose-random" name="bgr" value="219">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="blood-urea" class="form-label">Blood Urea</label>
        <input type="number" class="form-control" id="blood-urea" name="bu" value="176">
      </div>
      <div class="col-md-6">
        <label for="serum-creatinine" class="form-label">Serum Creatinine</label>
        <input type="number" class="form-control" id="serum-creatinine" name="sc" value="13.8">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">Sodium</label>
        <input type="number" class="form-control" id="sodium" name="sod" value="136">
      </div>
      <div class="col-md-6">
        <label for="sodium" class="form-label">Pottasium</label>
        <input type="number" class="form-control" id="pottasium" name="pot" value="4.5">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">Haemoglobin</label>
        <input type="number" class="form-control" id="haemoglobin" name="hemo" value="8.6">
      </div>
      <div class="col-md-6">
        <label for="sodium" class="form-label">Packed cell Volume</label>
        <input type="number" class="form-control" id="packed-cell-volume" name="packed_cell_volumne" value="24">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">White Blood Cell Count</label>
        <input type="number" class="form-control" id="white-blood-cell-count" name="wc" value="13200">
      </div>

      <div class="col-md-6">
        <label for="sodium" class="form-label">Red Blood Cell Count</label>
        <input type="number" class="form-control" id="red-blood-cell-count" name="rc" value="2.7">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">Hypertension</label>
        <select class="form-control" id="hypertension" name="htn" value="1">
          <option value="0">Yes</option>
          <option value="1">No</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="sodium" class="form-label">Diabetes Mellitus</label>
        <select class="form-control" id="diabetes-mellitus" name="dm" value="0">
          <option value="0">Yes</option>
          <option value="1">No</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">Coronary Arrey Disease</label>
        <select class="form-control" id="coronary-arrey-diasease" name="cad" value="0">
          <option value="0">Yes</option>
          <option value="1">No</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="sodium" class="form-label">Appetite</label>
        <select class="form-control" id="appetite" name="appet" value="0">
          <option value="0">Poor</option>
          <option value="1">Good</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sodium" class="form-label">Pedal Edema</label>
        <select class="form-control" id="pedal-edema" name="pe" value="1">
          <option value="0">Yes</option>
          <option value="1">No</option>
        </select>
      </div>

      <div class="col-md-6">
        <label for="sodium" class="form-label">Anemia</label>
        <select class="form-control" id="anemia" name="ane" value="1">
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
</body>
</html>
