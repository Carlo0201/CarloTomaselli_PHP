<?php

$n1 = readline("1 Numero: ");
$n2 = readline("2 Numero: ");
$operazione = readline("Operazione: ");

if($operazione === 'somma'){

    echo $n1 + $n2;

}elseif($operazione === 'sottrazione'){

    echo $n1 - $n2;

}elseif($operazione ==='moltiplicazione'){

    $prodotto=0;

    for($i=0;$i<$n2;$i++){
        $prodotto +=$n1;
    }

    echo $prodotto;

}elseif($operazione === 'divisione'){
    
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
    
    echo $q;

}elseif($operazione ==='fattoriale'){

    $risultato=1;

    for($i = $n1;$i > 1; $i--){
        $risultato = $risultato * $i;
    }
          
    echo $risultato;
}