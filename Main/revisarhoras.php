<?php
    include './config/db.php';
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-color:#fff1ee">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/icons8-caduceus-16.png"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"/>
  </head>
  
  <body class="body-revisarhoras">
    <main class="inicio">
      <h1 class="texto">Tus Horas de Examenes</h1>

      <form class="formulario" action="./processes/consulta_hora.php" method="post">
        <h2 class="texto-cuestionario">Ingrese su Rut</h2>
        <input class="entrada" type="text" name="rut" placeholder="Rut">
        <button class="boton" type="submit">Buscar Horas</button>
      </form>
      
      <a class="link" href="home.php">Volver al Inicio</a>
      <h1 class="texto"> </h1>
      <a class="link" href="revisarhoras2.php">Revisar Horas como Funcionario</a>
    </main>
  </body>
</html>