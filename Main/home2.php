<?php
  include './config/db.php';
  session_start();

  if (!isset($_SESSION['nombre_usuario']) || $_SESSION['usuario_tipo'] != 'Funcionario') {
    header("Location: ./index.php");
    exit();
  } else {
    $nombreUsuario = $_SESSION['nombre_usuario'];
  }
?>

<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SRH</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/icons8-caduceus-16.png">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="home-body">
  <div class="home-bar">
    <div class="home-bar-element">
      <img class="home-logo" src="images/cardiogram.png" alt="Logo">
      <h2>SRH</h2>
    </div>
    <div class="home-bar-element">
      <h5>Bienvenido Funcionario/a <?php echo htmlspecialchars($nombreUsuario); ?></h5>
    </div>
    <div class="home-bar-element">
      <a class="home-logout" href="index.php">
        <img src="images/log-out-regular-60.png" alt="Cerrar Sesión">
        <h5>Cerrar Sesión</h5>
      </a>
    </div>
  </div>

  <div class="home-contenedor">
    <div class="home-opcion">
      <h2 style="margin-top: 0px;">Agregar Usuario</h2>
      <form class="home-formulario" action="./processes/guardar_informacion.php" method="POST">
        <input class="home-entrada" id="nombre" name="nombre" placeholder="Nombre" required>
        <input class="home-entrada" id="rut" name="rut" placeholder="Rut" required>
        <input class="home-entrada" id="direccion" name="direccion" placeholder="Direccion" required>
        <input class="home-entrada" id="telefono" name="telefono" placeholder="Telefono" required>
        <input class="home-entrada" id="alergias" name="alergias" placeholder="Alergias" required>
        <h5 style="font-size: 15px; margin:0px 0px 0px -140px;">Fecha de Nacimiento:</h5>
        <input class="home-entrada" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>  
        <h5 style="font-size: 15px; margin:0px 0px 0px -190px;">Tramo Fonasa:</h5>
        <select style="padding: 9px 0px 9px 6px; font-size: 15px; height: 12%; margin: 0 0 10px 0; border-color:#D4D4D4; border-radius:4px;"  id="tramo_fonasa" name="tramo_fonasa" required>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
        <input class="home-entrada" id="m_deriva" name="medico_deriva" placeholder="Medico" required>
        <input class="home-entrada" id="diagnostico" name="diagnostico" placeholder="Posible Diagnostico">       
        <button class="home-boton" type="submit">Guardar Información</button>
      </form>
    </div>

    <div>
      <div class="home-opcion">  
        <form class="home-formulario" action="./processes/consulta_hora.php" method="post">
          <h2 class="home-texto-cuestionario">Buscar Horas</h2>
          <input class="home-entrada" type="text" name="rut" placeholder="Rut">
          <button class="home-boton" style="margin: 20px 0 20px 0;" type="submit">Buscar</button>
        </form>
      </div>
    
      <div class="home-opcion" style="margin: 50px 0 0 0;"> 
        <form class="home-formulario" action="./processes/consulta_hora.php" method="post">
          <h2 class="home-texto-cuestionario">Agendar Hora</h2>
          <input class="home-entrada" type="text" name="rut" placeholder="Rut">
          <button class="home-boton" style="margin: 20px 0 20px 0;" type="submit">Agendar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
