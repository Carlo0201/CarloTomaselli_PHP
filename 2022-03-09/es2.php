<?php

$stringa = readline('Inserisci una stringa: ');
$vocali = 0;

for ($i = 0; $i < strlen($stringa); $i++) {
    if (in_array(strtolower($stringa[$i]), ['a', 'e', 'i', 'o', 'u'])) {
        $vocali++;
    }
}

echo $vocali . ' vocali'. PHP_EOL;