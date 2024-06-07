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
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body class="body-home">
    <div class="bar">
      <div class="bar-element">
        <img class="logo" src="images/cardiogram.png">
        <h2>SRH</h2>
      </div>
      <div class="bar-element">
        <h5>Bienvenido <?php echo htmlspecialchars($nombreUsuario);?><h5>
      </div>
      <div class="bar-element">
        <a class="logout" href="index.php">
          <img src="images/log-out-regular-60.png">
          <h5>Cerrar Sesión</h5>
        </a>
      </div>
    </div>

    <div class="contenedor">
      <div class="opcion">  
        <form class="formulario" action="./processes/consulta_hora.php" method="post">
          <h2 class="texto-cuestionario">Ingrese su Rut</h2>
          <input class="entrada" type="text" name="rut" placeholder="Rut">
          <button class="boton" type="submit">Buscar Horas</button>
        </form>
      </div>

      <div class="opcion">
        <form class="formulario" action="./processes/consulta_hora.php" method="post">
          <h2 class="texto-cuestionario">Ingrese su Rut</h2>
          <input class="entrada" type="text" name="rut" placeholder="Rut">
          <button class="boton" type="submit">Agendar Hora</button>
        </form>
      </div>
      <a href="informacion_cliente.php">
        Agregar Usuario
      </a>
    </div>
  </body>
</html>