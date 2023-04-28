<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Analysis;
use App\Models\Contactus;
use App\Models\User;
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
    $total_number_of_patients = User::all()->where('isAdmin', '=', '0')->count();
    return view('Backend.index', ['total_patients' => $total_number_of_patients]);
  }

  public function patient_index()
  {
    $patients['datas'] = User::where('IsAdmin', 0)->get();
    return view('Backend.Patient.index', compact('patients'));
  }

  public function patient_show($id)
  {
    $data['patient'] = User::find($id);
    $analysis = Analysis::where('user_id', $id)->get();
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
      return redirect()->route('admin.patient.index');
    }
    return view('Backend.Patient.show', compact('data', 'analysis'));
  }


  public function patient_delete($id)
  {
    $data['patient'] = User::find($id);
    if (!$data['patient']) {
      request()->session()->flash('error', 'Invalid Request');
      return redirect()->route('admin.patient.index');
    }
    if ($data['patient']->delete()) {
      request()->session()->flash('success', 'Success');
      return redirect()->route('admin.patient.index');
    } else {
      request()->session()->flash('error', 'Delete Failed');
    }
  }

  public function patient_report()
  {
    return "Under Construction";
  }

  public function patient_report_show($id)
  {
    $user_id = $id;
    $report['data'] = Analysis::where('user_id', '=', $user_id)->get()->first();
    if ($report['data'] === NULL) {
      request()->session()->flash('error', 'No Result Found');
      return redirect()->back();
    }
    return view('Backend.Patient.showReport', compact('report'));
  }


  public function contactIndex()
  {
    $contact = Contactus::all();
    return view('Backend.contactus', compact('contact'));
  }
}
