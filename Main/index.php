<?php
  include "./config/db.php";
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-image: url('images/Background.jpg'); background-position: center; background-size: cover;">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link rel="icon" href="images/cardiogram.png" type="image/png">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"/>
  </head>

  <body class="body-index">
    <main class="inicio">
      <h1 class="texto">Bienvenido a SRH</h1>

      <form class="formulario" action="./processes/iniciar-sesion.php" method="post">
        <h2 class="texto-cuestionario">Nombre de Usuario</h2>
        <input class="entrada" type="text" name="nombre" placeholder="Nombre.Apellido">

        <h2 class="texto-cuestionario">Contraseña</h2>
        <input class="entrada" type="password" name="contraseña" placeholder="Contraseña">

        <h2 class="texto-cuestionario">Tipo de Cuenta</h2>
        <select class="selector" name="tipo">
          <option value="Paciente">Paciente</option>
          <option value="Funcionario">Funcionario</option>
        </select>

        <button class="boton" type="submit">Iniciar Sesión</button>
      </form>

      <h1 class="texto2">¿No tienes una cuenta?</h1>
      <a class="link" href="signup.php">Registrarme</a>
    </main>
  </body>
</html>