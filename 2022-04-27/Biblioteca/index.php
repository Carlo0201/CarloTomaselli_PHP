<?php
session_start();
require 'header.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/index.css">

  <title>Login</title>
</head>

<body>
  <form method="post">

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button class="form-control btn btn-success" type="submit" name="login">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="reset" class="form-control btn btn-success cancelbtn">Cancel</button>
      <span class="psw"><a href="register.php">Register</a></span>
    </div>
  </form>

</body>

</html>


<?php

$login_email = "";
$login_password = "";
$db_id = [];
$db_nome = [];
$db_password = [];
$db_email = [];
$db_cognome = [];
$no = 1;


include 'db_connection.php';

//______________________AUTENTICAZIONE_______________________________
if (array_key_exists('login', $_POST)) {
  if (isset($_POST['email'])) {
    $login_email = htmlentities($_POST['email']);
  }
  if (isset($_POST['password'])) {
    $login_password = htmlentities($_POST['password']);
  }

  //prelevo i dati dalla tabella
  $getutente = "SELECT * FROM utenti WHERE email = '" . $login_email . "' AND password = '" . $login_password . "' AND admin = 1";

  $risultato = $conn->query($getutente);

  if ($risultato->num_rows > 0) {

    // salvo le informazioni dell'utente
    while ($riga = $risultato->fetch_assoc()) {
      var_dump($risultato);
      echo $riga["id"];
      $db_id = $riga["id"];
      $db_nome = $riga["nome"];
      $db_cognome = $riga["cognome"];
      $db_email =  $riga["email"];
      $db_password =  $riga["password"];

      header("Location: catalogo.php");
    }
  } else {
    echo "controlla le tue credenziali o verifica di essere admin, questa piattaforma è privata e accessibile solo dai dipendenti della biblioteca";
  }
}
?>