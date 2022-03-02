<?php

$numero = readline("Inserisci un numero ");

for ($i = 2; $i < $numero; $i++) {

    if ($numero % $i == 0) {
        die("Il numero NON è primo" . PHP_EOL);
    }
}

echo "Il numero è primo" . PHP_EOL;
