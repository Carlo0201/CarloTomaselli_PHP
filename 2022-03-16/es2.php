
<?php
$lunghezza = readline("lunghezza vettore");
$array = [];
for ($i = 0; $i < $lunghezza; $i++) {
    $array[$i] = readline("inserisci numero: ");
}
$inizio = 0;
sort($array);
var_dump($array);
$n = readline("inserisci numero da cercare");
$s = ricerca($array, $n, $lunghezza, $inizio);
if ($s == true) {
    echo 'trovato';
} else {
    echo 'non trovato';
}
function ricerca($array, $n, $lunghezza, $inizio)
{
    if ($n < $array[0] || $n > $array[$lunghezza - 1]) {
        return false;
    }
    $m = ($inizio + $lunghezza) / 2;
    if ($m < $inizio || $lunghezza < 0) {
        // l'elemento cercato non c'è        
        return false;
    } elseif ($n < $array[$m]) {
        return ricerca($array, $n, $m, $inizio);
    } elseif ($n > $array[$m]) {
        return ricerca($array, $n, $lunghezza, $m);
    } else {
        return true;
    }
}
