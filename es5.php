<?php

$numeroGenerato = random_int(0, 20);

$indovinato=false;

while($indovinato==false){

    $numeroInserito= readline("Inserisci un numero ");

    if($numeroInserito==$numeroGenerato){
        $indovinato=true;
        echo "Numero indovinato ". $numeroGenerato;
    }
    elseif($numeroInserito<$numeroGenerato){
        echo "Numero inserito minore" . PHP_EOL;
    }
    elseif($numeroInserito >$numeroGenerato){
        echo "Numero inserito maggiore" . PHP_EOL;
    }
}
