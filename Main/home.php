<?php
    include('./config/db.php');


  session_start();

  if (isset($_SESSION['nombre_usuario'])) {
    $nombreUsuario = $_SESSION['nombre_usuario'];
  } else {
    header("Location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html data-theme="light" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/icons8-caduceus-16.png"/>
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body class="body-home">

  </body>
</html>