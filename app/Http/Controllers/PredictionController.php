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
    $a->age = $request->age ?? 51;
    $a->user_id = $request->user_id;
    $a->bp = $request->bp ?? 76.325;
    $a->sg = $request->sg;
    $a->al = $request->al;
    $a->su = $request->su;
    $a->rbc = $request->rbc;
    $a->pc = $request->pc;
    $a->pcc = $request->pcc;
    $a->ba = $request->ba;
    $a->bgr = $request->bgr ?? 148.5875;
    $a->bu = $request->bu ?? 56.523;
    $a->sc = $request->sc ?? 3.051875;
    $a->sod = $request->sod ?? 137.70125;
    $a->pot = $request->pot ?? 4.564;
    $a->hemo = $request->hemo ?? 12.49325;
    $a->pcv = $request->pcv ?? 38.805;
    $a->wc = $request->wc ?? 8360.5;
    $a->rc = $request->rc ?? 4.69775;
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

    /// Pass the form data as arguments to the Python script
    $scriptPath = base_path('app/Pickles/script3.py');
    $command = "python $scriptPath $age $bp $sg $al $su $rbc $pc $pcc $ba $bgr $bu $sc $sod $pot $hemo $pcv $wc $rc $htn $dm $cad $appet $pe $ane ";
    $output = shell_exec($command);

    // $result = intval($output);

    // try
    // split the output into class label and confidence level
    $output_arr = explode(' ', $output);

    // extract class label and confidence level
    $class_label = intval($output_arr[0]);
    $confidence_level = floatval($output_arr[1]);

    $a->class = $class_label;
    $a->c_level = $confidence_level;
    $a->save();

    // Display the output in the frontend
    return redirect()->route('analysis.log')->with('mssg', 'Successfully Stored The Data');
  }
}
