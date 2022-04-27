<?php

class Docente{

    public $nome;
    public $cognome;
    public $materia;

    function __construct($nomeParam, $cognomeParam){

        $this->nome=$nomeParam;
        $this->cognome= $cognomeParam;

    }
      

}