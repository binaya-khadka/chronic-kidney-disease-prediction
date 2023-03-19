<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;

class PredictionController extends Controller
{
  public function predict(Request $request)
  {
    $a = new Analysis;
    $a->age = $request->age;
    $a->patient_id = $request->patient_id;
    $a->bp = $request->bp;
    $a->sg = $request->sg;
    $a->al = $request->al;
    $a->su = $request->su;
    $a->rbc = $request->rbc;
    $a->pc = $request->pc;
    $a->pcc = $request->pcc;
    $a->ba = $request->ba;
    $a->bgr = $request->bgr;
    $a->bu = $request->bu;
    $a->sc = $request->sc;
    $a->sod = $request->sod;
    $a->pot = $request->pot;
    $a->hemo = $request->hemo;

    // packed_cell_volumne
    // $a->packed_cell_volumne = $request->packed_cell_volumne;
    $a->pcv = $request->pcv;

    $a->wc = $request->wc;
    $a->rc = $request->rc;
    $a->htn = $request->htn;
    $a->dm = $request->dm;
    $a->cad = $request->cad;
    $a->appet = $request->appet;
    $a->pe = $request->pe;
    $a->ane = $request->ane;
    $a->save();


    // $store_in_database = Analysis::create($request->all());
    // $store_in_database;
    // dd($store_in_database);
    return redirect()->route('analysis.log')->with('mssg', 'Successfully Stored The Data');

    // dd($analysis);
    $age = 50;
    $bp = 80;
    $sg = 1.015;
    $al = 0;
    $su = 1;
    $rbc = 1;
    $pc = 0;
    $pcc = 0;
    $ba = 0;
    $bgr = 219;
    $bu = 176;
    $sc = 13.8;
    $sod = 136;
    $pot = 4.5;
    $hemo = 8.6;
    $pcv = 24;
    $wc = 13200;
    $rc = 2.7;
    $htn = 1;
    $dm = 0;
    $cad = 0;
    $appet = 0;
    $pe = 1;
    $ane = 1;

    // Pass the form data as arguments to the Python script
    $scriptPath = base_path('app/Pickles/script3.py');
    $command = "python $scriptPath $age $bp $sg $al $su $rbc $pc $pcc $ba $bgr $bu $sc $sod $pot $hemo $pcv $wc $rc $htn $dm $cad $appet $pe $ane ";
    $output = shell_exec($command);
    // echo "output is : " . $output;

    // worked
    // $scriptPath = base_path('app/Pickles/scripts.py');
    // $command = "python $scriptPath ";
    // $output = shell_exec($command);
    // echo "output ithe s : " . $output;

    // Display the output in the frontend
    return view('Frontend.predictionResult', ['output' => $output]);
  }
}
