<?php

$randomNumber = rand(100, 999);
$tries = 0;

while (true) {
    $tries++;
    $randomGuess = rand(100, 999);
    if ($randomGuess === $randomNumber) {
        echo "Nombre généré : $randomNumber<br>";
        echo "Nombre d'essais : $tries";
        break;
    }
}


?>