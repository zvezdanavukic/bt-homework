<?php
//Mix of half circle and rectangle surface area of the pool
function cir_rec_area ($a,$b) {
    $cirRecArea =  (pi() * (pow(($b/2 ),2))) + ($a*$b);
    return $cirRecArea;
}
echo "Mix of half circle and rectangle surface area of the pool is " . ( round ( cir_rec_area(6,4)  , 2)) . "<br>";


//Circle surface area of the pool
function circle_area ($raduis) {
    $circleArea = pi() * ($raduis * $raduis);
    return $circleArea;
}
echo "Circle surface area of the pool is " . ( round ( circle_area (4) , 2)) ."<br>";


//Rectangle surface area of the pool
function rectangle_area ($c, $d) {
    $rectangleArea = $c * $d;
    return $rectangleArea;
   }
echo "Rectangle surface area of the pool is " .  rectangle_area (8,4)  ."<br>";


//Total surface area of three pools
function total_area ($a,$b,$raduis,$c,$d) {
    $totalArea = (( pi() * (pow(($b/2 ),2))) + ($a*$b)) + (pi() * ($raduis * $raduis))  + ($c * $d);
    return $totalArea;
}
echo "Total surface area of three pools is "  . ( round ( total_area (6,4,4,8,4),2));


?>
