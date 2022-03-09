<?php

    $array=[];
    $min=999999999;
    $max=0;

    for($i=0;$i<20;$i++){
        $array[$i]=readline(($i+1) . " numero: " );

        if($min>$array[$i]){
            $min=$array[$i];
        }
        else if($max<$array[$i]){
            $max=$array[$i];
        }

        echo $array[$i] . PHP_EOL;
    }


    echo "Maggiore " . $max . PHP_EOL;
    echo "Minore " . $min . PHP_EOL;

    