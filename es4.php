<?php

$anno = date('Y');

$i = 0;

while ($i <= 20) {
    if ($anno % 400 == 0 || ($anno % 4 == 0 && !($anno % 100 == 0))) {
        echo $anno . PHP_EOL;
        $i++;
    }
    $anno++;
}
