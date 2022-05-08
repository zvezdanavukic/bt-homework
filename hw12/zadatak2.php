<?php
if(!empty($_POST['sirinazida'])) $sirinaZida=$_POST['sirinazida'];
else echo "Niste uneli sirinu zida<br>";
if(!empty($_POST['visinazida'])) $visinaZida=$_POST['visinazida'];
else echo "Niste uneli visinu zida<br>";
if(!empty($_POST['sirinaplocice']))  $sirinaPlocice=$_POST['sirinaplocice'];
else echo "Niste uneli sirinu plocice<br>";
if(!empty($_POST['visinaplocice'])) $visinaPlocice=$_POST['visinaplocice'];
else echo "Niste uneli visinu plocice<br>";

if(isset($sirinaZida) && isset($visinaZida) && isset($sirinaPlocice)  && isset($visinaPlocice)) {
    $zid= $sirinaZida * $visinaZida;
    $plocica= $sirinaPlocice * $visinaPlocice;
    $broj=$zid/$plocica;
    $broj=ceil($broj); 
}
    echo "Broj potrebnih plocica je ". $broj; 