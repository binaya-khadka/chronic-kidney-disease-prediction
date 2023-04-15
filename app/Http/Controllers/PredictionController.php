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
    $a->pcv = $request->pcv;
    $a->wc = $request->wc;
    $a->rc = $request->rc;
    $a->htn = $request->htn;
    $a->dm = $request->dm;
    $a->cad = $request->cad;
    $a->appet = $request->appet;
    $a->pe = $request->pe;
    $a->ane = $request->ane;

    $age = $a->age;
    $bp = $a->bp;
    $sg = $a->sg;
    $al = $a->al;
    $su = $a->su;
    $rbc = $a->rbc;
    $pc = $a->pc;
    $pcc = $a->pcc;
    $ba = $a->ba;
    $bgr = $a->bgr;
    $bu = $a->bu;
    $sc = $a->sc;
    $sod = $a->sod;
    $pot = $a->pot;
    $hemo = $a->hemo;
    $pcv = $a->pcv;
    $wc = $a->wc;
    $rc = $a->rc;
    $htn = $a->htn;
    $dm = $a->dm;
    $cad = $a->cad;
    $appet = $a->appet;
    $pe = $a->pe;
    $ane = $a->ane;

    // Pass the form data as arguments to the Python script
    $scriptPath = base_path('app/Pickles/script3.py');
    $command = "python $scriptPath $age $bp $sg $al $su $rbc $pc $pcc $ba $bgr $bu $sc $sod $pot $hemo $pcv $wc $rc $htn $dm $cad $appet $pe $ane ";
    $output = shell_exec($command);
    $result = intval($output);

    $a->class = $result;
    $a->save();

    // Display the output in the frontend
    return redirect()->route('analysis.log')->with('mssg', 'Successfully Stored The Data');
  }
}
