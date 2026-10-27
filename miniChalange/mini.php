<?php

function Welcome ($student = "Fron Demolli"){
    echo "Welcome $student";
}


Welcome();

$test1 = 100;
$test2 = 85;
$test3 = 68;
$avgPoints = CalculateAvg();

function CalculateAvg(){
    $test1 = 100;
    $test2 = 85;
    $test3 = 68;
    $avgPoints = ($test1 + $test2 + $test3 )/ 3;
}

CalculateAvg();

$avgPoints = CalculateAvg();

if ($avgPoints >=90) {
    $grade = "A";
}
elseif ($avgPoints >=80) {
    $grade = "B";
}
elseif ($avgPoints >=70) {
    $grade = "C";
}
elseif ($avgPoints >=60) {
    $grade = "D";
}
else {
    $grade = "F";
}

    

echo " You got a(n) $grade";


?>