<?php

$n1 = readline("1 Numero: ");
$n2 = readline("2 Numero: ");
$operazione = readline("Operazione: ");

if($operazione === 'somma'){

    echo somma($n1, $n2);

}elseif($operazione === 'sottrazione'){

    echo sottrazione($n1, $n2);

}elseif($operazione ==='moltiplicazione'){

    echo moltiplicazione($n1, $n2);

}elseif($operazione === 'divisione'){

    $risultato= divisione($n1,$n2);
    
    echo "Risultato: ";
    print_r($risultato["q"]);
    echo " resto: ";
    print_r($risultato["r"]);

}

function somma($n1, $n2){

    $somma=$n1+$n2;

    return $somma;
}

function sottrazione($n1, $n2){

    $sottrazione= $n1-$n2;

    return $sottrazione;
}

function moltiplicazione($n1, $n2){

    $prodotto=0;

    for($i=0;$i<$n2;$i++){
        $prodotto +=$n1;
    }

    return $prodotto;

}

function divisione($n1, $n2){

    $q=0;
    $r=0;
    $n=$n1;
    $d=$n2;

    //q quoto
    //r resto
    //n numeratore
    //d denominatore
    while($n>=$d){
         $n-=$d;
         $q++;
    };
    $r=$n;

    $risultato=[
        "q" => $q,
        "r" => $r,
    ];

    return $risultato;
}