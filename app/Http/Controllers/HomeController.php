<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Contactus;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use PDO;

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

    public function analysis_create()
    {
        return view('Frontend.analysispage');
    }

    public function analysis_store(Request $req)
    {
        $store_in_database = Analysis::create($req->all());
        $store_in_database;
        return redirect()->route('analysis.create')->with('mssg', 'Successfully Stored The Data');
    }

    public function analysis_log()
    {
        $user = auth()->user()->id;
        $getting_data_of_user = DB::table('analyses')->where('user_id', $user)->get();
        return view('Frontend.analysislog', ['user_data' => $getting_data_of_user]);
    }

    public function homepage()
    {
        return view('Frontend.homepage');
    }

    public function prediction()
    {
        return view('Frontend.prediction');
    }

    public function aboutUs()
    {
        return view('Frontend.aboutus');
    }

    public function contactUs()
    {
        return view('Frontend.contactus');
    }


    public function contactusStore(Request $request)
    {
        $contact = new Contactus();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message', 'Data Send Successfully');
    }

    // user profile added
    public function userprofile()
    {
        return view('Frontend.userprofile');
    }
    // test
    public function predictionResult()
    {
        return view('Frontend.predictionResult');
    }
}
