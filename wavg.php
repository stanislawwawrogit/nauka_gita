<?php



$oceny = [5, 4, 3];

$wagi = [8, 3, 1];



$sumaOcenRazyWagi = 0;

$sumaWag = 0;



for ($i = 0; $i < count($oceny); $i++) {

    $sumaOcenRazyWagi += $oceny[$i] * $wagi[$i];

    $sumaWag += $wagi[$i];

}



$sredniaWazona = $sumaOcenRazyWagi / $sumaWag;



echo "Średnia ważona wynosi: " . $sredniaWazona;



?>