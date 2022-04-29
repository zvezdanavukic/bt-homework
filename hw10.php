<?php
//zadatak 1

$a = 200;
$b = 80;
$c = $a + $b;
echo $c;
echo "<br>";
$c = $a * $b;
echo $c;
echo "<br>";
$c = $a - $b;
echo $c;
echo "<br>";
$c = $a / $b;
echo $c;


//zadatak 2

echo "<br>";
$a =["ponedeljak", "utorak", "sreda", "cetvrtak", "petak", "subota", "nedelja"];
echo "Danas je " . $a[5] . "!" ;

//zadatak 2 na drugi nacin

echo "<br>";
$z = rand(0,6);

if ($z==0) {
    echo "Danas je ponedeljak!";
} else if ($z==1) {
    echo "Danas je utorak!";
} else if ($z==2) {
    echo "Danas je sreda!";
} else  if ($z==3) {
    echo "Danas je cetvrtak!";
} else if ($z==4) {
    echo "Danas je petak!";
} else if ($z==5) {
    echo "Danas je subota!";
} else if ($z==6) {
    echo "Danas je nedelja!";
}

//zadatak 3

echo "<br>";
$a = 2;
$b = 4;
$c = 6;
$sum = $a + $b + $c;
echo "Zbir brojeva " . $a . ", " . $b . " i " . $c . " je " . $sum . "." ;


//zadatak 3 na drugi nacin

echo "<br>";
$x = 3;
$y = 5;
$z = 7 ;
$add = array ($x, $y, $z);
echo "Zbir brojeva $x, $y i $z je " . array_sum($add);

?>
