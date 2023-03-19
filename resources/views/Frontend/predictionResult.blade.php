<?php
echo "output : $output <br>";
$type = gettype($output);
echo "type : $type <br>";

$result = intval($output);
$type1 = gettype($result);
echo "type after gettype : $type1 <br>";

echo "the value of result after integer : $result";

echo "outcomes : $result";
if($result == 1){
    echo "Not CKD <br>";
}
else if($result == 0){
    echo "CKD <br>";
}
else{
        $sum= $result + 5;
        echo "sum = ".$sum;
}
?>
