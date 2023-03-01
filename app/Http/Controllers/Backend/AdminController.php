<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
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
    $total_number_of_patients = Patient::count();
    return view('Backend.index', ['total_patients' => $total_number_of_patients]);
  }

  public function patient_index()
  {
    $patients['datas'] = Patient::all();
    return view('Backend.Patient.index', compact('patients'));
  }

  public function patient_show($id)
  {
    $data['patient'] = Patient::find($id);
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
      return redirect()->route('admin.patient.index');
    }
    return view('Backend.Patient.show', compact('data'));
  }


  public function patient_delete($id)
  {
    $data['patient'] = Patient::find($id);
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
    $data['patients'] = Patient::onlyTrashed()->get();
    return view('Backend.Patient.trashed_record', compact('data'));
  }

  public function patient_trash_record_restore($id)
  {

    $data['patient'] = Patient::withTrashed()->where('id', '=', $id);
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
    }
    if ($data['patient']->restore()) {
      request()->session()->flash('success', 'Successfully Restored');
    } else {
      request()->session()->flash('error', 'Cannot Restore Right Now. Contact Developer..');
    }
    return redirect()->route('admin.patient.trashed');
  }

  public function patient_trash_force_delete($id)
  {
    $data['patient'] = Patient::onlyTrashed()->find($id);
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
    }
    $delete_record = $data['patient']->forceDelete();
    if ($delete_record) {
      request()->session()->flash('success', 'Successfully Deleted');
    } else {
      request()->session()->flash('error', 'Sorry Delete Failed. Try again Later');
    }
    return redirect()->route('admin.patient.trashed');
  }
}
