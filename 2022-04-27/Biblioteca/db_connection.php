<?php

$servername = "localhost";
$username = "root";
$password = "";
$GLOBALS['conn'] = new mysqli($servername, $username, $password, "biblioteca_php");

if ($GLOBALS['conn']->connect_error) {
    die("Connessione fallita: " . $GLOBALS['conn']->connect_error);
}
