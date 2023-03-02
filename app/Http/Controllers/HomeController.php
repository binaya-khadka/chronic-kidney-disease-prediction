<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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

        // $validation = $this->validate(['name' => 'required', 'email' => 'required']);

        // $this->validate([]);
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|min:10|max:10',
        ]);

        $patient = Patient::create($request->all());
        if ($patient) {
            request()->session()->flash('success', 'Account Created Successfully');
            return redirect()->route('homepage.patient.register');
        } else {
            request()->session()->flash('error', 'Error Occured');
        }
        return redirect()->route('homepage.patient.register');
    }
}
