<?php

$quantita=readline("Inserire n : ");
$array=[];

for($i=0; $i<$quantita; $i++){
    $array[$i]=readline("Numero " . $i .": ");
}

for($i=0; $i<$quantita; $i++){
    if($i%2==0){
        echo $array[$i] . PHP_EOL;
    }
}