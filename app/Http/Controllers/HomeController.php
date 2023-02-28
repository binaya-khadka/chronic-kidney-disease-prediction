<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function register()
    {
        return view('Frontend.register');
    }

    public function register_store(Request $request)
    {
        // $patient_name = $request->name;
        // $patient_age = $request->age;
        // $patient_email = $request->email;
        // $patient_password = bcrypt($request->password);
        // $patient_phone = $request->phone;

        $patient = \App\Models\Patient::create($request->all());
        // $patient;
        if ($patient) {
            request()->session()->flash('success', 'Account Created Successfully');
            return redirect()->route('homepage.patient.register');
        } else {
            request()->session()->flash('error', 'Error Occured');
        }
        return redirect()->route('homepage.patient.register');
    }
}
