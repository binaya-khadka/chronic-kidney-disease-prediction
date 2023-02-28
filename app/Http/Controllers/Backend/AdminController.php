<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $total_number_of_patients = \App\Models\Patient::count();
    return view('Backend.index', ['total_patients' => $total_number_of_patients]);
  }

  public function indexPatient()
  {
    return view('');
  }

  public function patient_index()
  {
    $patients['datas'] = \App\Models\Patient::all();
    return view('Backend.Patient.index', compact('patients'));
  }

  public function patient_show($id)
  {
    $data['patient'] = \App\Models\Patient::find($id);
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
      return redirect()->route('admin.patient.index');
    }
    return view('Backend.Patient.show', compact('data'));
  }


  public function patient_delete($id)
  {
    $data['patient'] = \App\Models\Patient::find($id);
    if (!$data['patient']) {
      request()->session()->flash('Invalid Request');
      return redirect()->route('admin.patient.index');
    }
    if ($data['patient']->delete()) {
      request()->session()->flash('success', 'Success');
      return redirect()->route('admin.patient.index');
    } else {
      request()->session()->flash('error', 'Delete Failed');
    }
  }

  public function patient_trash_store()
  {
    $data['patients'] = \App\Models\Patient::onlyTrashed()->get();
    return view('Backend.Patient.trashed_record', compact('data'));
  }
}
