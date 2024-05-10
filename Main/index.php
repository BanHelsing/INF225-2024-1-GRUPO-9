<?php
  include("./config/db.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
    $tipo = $_POST["tipo"];

    $sql_verificar = "SELECT * FROM users WHERE nombre = '$nombre' AND contraseña = '$contraseña' AND tipo = '$tipo'";
    $resultado = $connection->query($sql_verificar);

    if ($resultado->num_rows > 0) {
      header("Location: home.php");
      exit;
    } else {
      echo '<script>alert("Usuario, contraseña o tipo incorrectos.");</script>';
    }
  }
  $connection->close();
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-color:#fff1ee">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/icons8-caduceus-16.png"/>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"/>
  </head>

  <body class="body-index">

    <main class="inicio">
      <h1 class="texto">Bienvenido a SRH</h1>

      <form class="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2 class="texto-cuestionario">Nombre de Usuario</h2>
        <input class="entrada" type="texto" name="nombre" placeholder="Nombre.Apellido">

        <h2 class="texto-cuestionario">Contraseña</h2>
        <input class="entrada" type="texto" name="contraseña" placeholder="Contraseña">

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