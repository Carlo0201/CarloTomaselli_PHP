<?php

$somma = 0;
$prodotto = 1;
$array = [];

$quantita = readline("Inserire n : ");

for ($i = 0; $i < $quantita; $i++) {
    $array[$i] = readline("Numero " . ($i + 1) .": ");

    $somma += $array[$i];
    $prodotto *= $array[$i];
}

echo $somma . PHP_EOL;
echo $prodotto . PHP_EOL;