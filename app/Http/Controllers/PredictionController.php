<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredictionController extends Controller
{
    public function predict()
    {
        // Load the form data into variables
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
        $command = "python3 /app/Pickles/script3.py $age $bp $sg $al $su $rbc $pc $pcc $ba $bgr $bu $sc $sod $pot $hemo $pcv $wc $rc $htn $dm $cad $appet $pe $ane 2>&1";
        $output = shell_exec($command);

        // Display the output in the frontend
        return view('prediction', ['output' => $output]);
    }
}
