<?php

    include ("Docente.php");
    include ("Materia.php");
    include ("Registro.php");
    include ("Studente.php");
    include ("Voto.php");

    $menu;

    do{


    echo "";

    echo "1. Inserisci studente";
    echo "2. Inserisci docente";
    echo "3. Inserisci materia";
    echo "4. Inserisci voto";


    $menu= readline("Menu");


    switch($menu){
        case 1:

            

            break;
        case 2:
            break;
        case 3:
            break;
    }



    }while($menu!=0);