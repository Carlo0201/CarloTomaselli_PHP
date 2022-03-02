<?php
$numero = readline("Inserire un numero ");

$risultato = 0;

for ($i = 1; $i <= $numero; $i++) {

    if ($i % 3 == 0 || $i % 5 == 0) {
        echo $i . PHP_EOL;
        $risultato = $risultato + $i;
        echo $risultato . PHP_EOL;
    }
}

echo $risultato;
