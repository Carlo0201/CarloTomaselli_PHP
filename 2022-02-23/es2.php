<?php
$numero = readline("Inserire un numero ");

$risultato=0;

for ($i = 1; $i <= $numero; $i++) {
    $risultato = $risultato + $i;
}

echo $risultato;
