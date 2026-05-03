<?php



$oceny = [5, 4, 3];

<<<<<<< HEAD
$wagi = [7, 4, 1]
>>>>>>> konflikt



$sumaOcenRazyWagi = 0;

$sumaWag = 0;



for ($i = 0; $i < count($oceny); $i++) {

    $sumaOcenRazyWagi += $oceny[$i] * $wagi[$i];

    $sumaWag += $wagi[$i];

}



$sredniaWazona = $sumaOcenRazyWagi / $sumaWag;



echo "Średnia ważona wynosi: " . $sredniaWazona;



?>