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
        // dd($patients);
        return view('Backend.Patient.index', compact('patients'));
    }
}
