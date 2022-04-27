<?php

    include ("Docente.php");
    include ("Materia.php");
    include ("Registro.php");
    include ("Studente.php");
    include ("Voto.php");

    $menu;
    $studenti;
    $docenti;
    $materie;
    $voti;

    do{

    echo "1. Inserisci studente";
    echo "2. Inserisci docente";
    echo "3. Inserisci materia";
    echo "4. Inserisci voto";


    $menu= readline("Menu");


    switch($menu){
        case 1:

            $nome=readline("Inserire nome: ");
            $cognome= readline("Inserire cognome: ");

            array_push($studenti, new Studente($nome, $cognome));

            break;

        case 2:

            $nome= readline("Inserire nome docente: ");
            $cognome=readline("Inserire cognome docente: ");

            array_push($docenti, new Docente($nome,$cognome));
            break;

        case 3:

            $materia= readline("Inserire materia: ");

            array_push($materie, new Materia($materia));

            break;

        case 4:

            $voto=readline("Inserire voto: ");

            array_push($voti, new Voto($voto) );
            
            break;
            

    }



    }while($menu!=0);