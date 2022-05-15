<?php
function gorivo ($ukupunoGorivo, $potrosnjaPoKamionu, $ostatakGorivaFlag =false) {
    $ostatakGoriva= $ukupunoGorivo % $potrosnjaPoKamionu;
    $brojKamionaKojiMoguDaPredjuRutu = $ukupunoGorivo / $potrosnjaPoKamionu;
    if ($ostatakGorivaFlag ){
        echo "Ostatak goriva iznosi ". $ostatakGoriva;
    }else {
        echo "Broj kamiona koji mogu da predju rutu iznosi " . number_format($brojKamionaKojiMoguDaPredjuRutu,1);
}
}
gorivo(150,35, false);


?>