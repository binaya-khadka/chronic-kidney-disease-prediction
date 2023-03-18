<?php
// Get the form data from Laravel and PHP
// $age =$_POST['age']; 
// $bp = $_POST['bp'];
// $sg = $_POST['sg'];
// $al = $_POST['al'];
// $su = $_POST['su'];
// $rbc = $_POST['rbc'];
// $pc = $_POST['pc'];
// $pcc = $_POST['pcc'];
// $ba = $_POST['ba'];
// $bgr = $_POST['bgr'];
// $bu = $_POST['bu'];
// $sc = $_POST['sc'];
// $sod = $_POST['sod'];
// $pot = $_POST['pot'];
// $hemo = $_POST['hemo'];
// $pcv = $_POST['pcv'];
// $wc = $_POST['wc'];
// $rc = $_POST['rc'];
// $htn = $_POST['htn'];
// $dm = $_POST['dm'];
// $cad = $_POST['cad'];
// $appet = $_POST['appet'];
// $pe = $_POST['pe'];
// $ane = $_POST['ane'];

$age = 30; 
$bp = 80; 
$sg = 1.020; 
$al = 0; 
$su = 0; 
$rbc = 1; 
$pc = 1; 
$pcc = 0; 
$ba = 0; 
$bgr = 80; 
$bu = 25; 
$sc = 0.7; 
$sod = 140; 
$pot = 4.5; 
$hemo = 14.5; 
$pcv = 44; 
$wc = 7500; 
$rc = 5.2; 
$htn = 0; 
$dm = 0; 
$cad = 0; 
$appet = 0; 
$pe = 0; 
$ane = 0; 

// Pass the form data as arguments to the Python script
$command = "python3 script3.py $age $bp $sg $al $su $rbc $pc $pcc $ba $bgr $bu $sc $sod $pot $hemo $pcv $wc $rc $htn $dm $cad $appet $pe $ane";
$output = shell_exec($command);

// Display the output in the frontend
echo "Predicted Class: " . $output;
?>
