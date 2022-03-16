<?php

$frase = readline('Inserisci una frase: ');
$parole = explode(' ', $frase);

$corta = null;
$lunga = null;

foreach ($parole as $parola) {
    if ($corta === null || strlen($parola) < strlen($corta)) {
        $corta = $parola;
    }

    if ($lunga === null || strlen($parola) > strlen($lunga)) {
        $lunga = $parola;
    }
}

echo 'Corta: ' . $corta . PHP_EOL;
echo 'Lunga: ' . $lunga . PHP_EOL;