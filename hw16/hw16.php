<?php
//First assignment
$emails = ['zvezdana@email.com','pera@email.com','markoemail','miki@email', 'mladjanemail'];

function filterEmail($emails) {
    foreach($emails as $value){
        if (strpos($value, "@")) {
            echo $value;
            echo "<br>";
        } else {
            echo "Email should contain @.";
            echo "<br>";
        }
    }  
    }
filterEmail($emails);

//Second assignment
$array = [1,2,3];
function arrayCalculate($arrayNumbers, $operation = "+") {
    if ($operation == "+") { 
         $totalSum = 0;
    foreach ($arrayNumbers as $value) {
        $totalSum += $value;
        }echo $totalSum;
    }
    if ($operation == "-") {
        $totalSub = 0;
        foreach($arrayNumbers as $value) {
        $totalSub -= $value;
    }   echo $totalSub;
    }
    if ($operation == "*") {
        $totalMul = 1;
        foreach($arrayNumbers as $value) {
        $totalMul *= $value;
    }   echo $totalMul;
    }
    if ($operation == "/") {
        $totalDiv = 1;
        foreach($arrayNumbers as $value) {
        $totalDiv /= $value;
    }   echo $totalDiv;
    }
    
}
arrayCalculate ($array, "+");
echo "<br>";
arrayCalculate ($array, "-");
echo "<br>";
arrayCalculate ($array, "*");
echo "<br>";
arrayCalculate ($array, "/");
echo "<br>";

//Third assignment
$information = array (
    'name' => 'Zvezdana',
    'last_name' => 'Vukic',
    'age' => '31',
    'gender' => 'female',
);
function keyExist($key,$information) {
    if (!array_key_exists($key,$information)){
        echo "The key is not in array";
    } else {
        echo "The key is in array";
    }
}
keyExist('name', $information);


?>