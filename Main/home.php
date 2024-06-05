<?php
    include('./header.php');
    include('./config/db.php');


  session_start();

  if (isset($_SESSION['nombre_usuario'])) {
    $nombreUsuario = $_SESSION['nombre_usuario'];
    echo "Bienvenido, " . htmlspecialchars($nombreUsuario) . "!";
  } else {
    header("Location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-color:#fff1ee" >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/icons8-caduceus-16.png"/>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"/>
  </head>

  <body class="body-home">
    <div class="contenedor">
      <div class="columna">
        <h1>A</h1>
      </div>
      <div class="columna">
        <h1>A</h1>
      </div>
      <div class="columna">
        <h1>A</h1>
      </div>
    </div>
  </body>
</html>