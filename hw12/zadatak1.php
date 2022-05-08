<?php


$tezina = $_GET["tezina"];
$zanimanje = $_GET["zanimanje"];
$godine = $_GET["godine"];
$faktorAktivnosti = "";
$faktorStarosti = "";

if ($tezina>2 && $tezina<500) {
    echo "Uneli ste tezinu $tezina <br> ";
    }   
    else {
    echo "Niste uneli tezinu $tezina <br>";
    }

if ($zanimanje === "programer" || $zanimanje === "administrativni radnik" || $zanimanje === "menadzer" ) {
    echo "Faktor aktivnosti je " .  $faktorAktivnosti = 100 ;
    }
    elseif ($zanimanje === "policajac" || $zanimanje === "vojnik") {
     echo "Faktor aktivnosti je " .  $faktorAktivnosti = 200 ;
    }
    elseif ($zanimanje === "sportista") {
      echo "Faktor aktivnosti je " . $faktorAktivnosti = 300 ;
    }
    else  {
    echo "Faktor aktivnosti je " . $faktorAktivnosti = 150;
    }
    echo "<br>";


if ($godine>=0 && $godine<=3) {
    echo "Faktor starosti je "  .  $faktorStarosti = 1.9 ;
    }
    elseif ($godine>=4 && $godine<=10) {
        echo "Faktor starosti je "  . $faktorStarosti = 1.5;
    }
    elseif ($godine>=11 && $godine<=18) {
        echo "Faktor starosti je "  .$faktorStarosti = 1.2;
    }
    elseif ($godine>=19 && $godine<=26) {
        echo "Faktor starosti je "  .  $faktorStarosti = 1;
    }
    elseif (($godine>=27 && $godine<=30) or ($godine>=50 && $godine<=60) ) {
        echo "Faktor starosti je "  . $faktorStarosti = 0.8 ;
    }
    elseif (($godine>=31 && $godine<=35) or ($godine>=45 && $godine<=49) ) {
        echo "Faktor starosti je "  .  $faktorStarosti = 0.7;
    }
    elseif (($godine>=36 && $godine<=44) or $godine>=60 ) {
        echo "Faktor starosti je "  . $faktorStarosti= 0.6;
    }
    echo "<br>";


    $maxkalorija = $tezina*$faktorAktivnosti*$faktorStarosti;
    echo "Preporuceni maksimalni dnevni unos kalorija je $maxkalorija";
    
    ?>
    

