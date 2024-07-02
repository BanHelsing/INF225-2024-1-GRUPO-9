<?php
  include './config/db.php';
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SRH</title>
  <link rel="icon" href="images/cardiogram.png" type="image/png">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="home-body">
  <div class="home-bar">
    <div class="home-bar-element">
      <img class="home-logo" src="images/cardiogram.png" alt="Logo">
      <h2>SRH</h2>
    </div>
    <div class="home-bar-element">
      <h5>Bienvenido <?php echo htmlspecialchars($nombreUsuario); ?></h5>
    </div>
    <div class="home-bar-element">
      <a class="home-logout" href="index.php">
        <img src="images/log-out-regular-60.png" alt="Cerrar Sesión">
        <h5>Cerrar Sesión</h5>
      </a>
    </div>
  </div>

  <div class="home-contenedor">
    <div class="home-opcion" style="margin: 150px 0 0 0;">
      <form class="home-formulario" action="./processes/consulta_hora.php" method="post">
        <h2 class="home-texto-cuestionario">Buscar Horas</h2>
        <input class="home-entrada" type="text" name="rut" placeholder="Rut">
        <button class="home-boton" style="margin: 20px 0 20px 0;" type="submit">Buscar</button>
      </form>
    </div>

    <div class="home-opcion" style="margin: 150px 0 0 0;">
      <form class="home-formulario" action="./processes/consulta_hora.php" method="post">
        <h2 class="home-texto-cuestionario">Agendar Horat</h2>
        <input class="home-entrada" type="text" name="rut" placeholder="Rut">
        <button class="home-boton" style="margin: 20px 0 20px 0;" type="submit">Agendar</button>
      </form>
    </div>
  </div>

</body>
</html>
