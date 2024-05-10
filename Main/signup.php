<?php
  include("./config/db.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $nombre = $_POST["nombre"];
      $contraseña = $_POST["contraseña"];
      $tipo = $_POST["tipo"];
      $Vcontraseña = $_POST["Vcontraseña"];
  
      if ($contraseña !== $Vcontraseña) {
        echo '<script>alert("Las contraseñas no coinciden. Intentalo de nuevo.");</script>';
      } else {
        $sql_verificar = "SELECT * FROM users WHERE nombre = '$nombre'";
        $resultado = $connection->query($sql_verificar);

        if ($resultado->num_rows > 0) {
          echo '<script>alert("El usuario ya existe. Por favor, elige otro nombre de usuario.");</script>';
        } else {
          $sql = "INSERT INTO users (nombre, contraseña, tipo) VALUES ('$nombre', '$contraseña', '$tipo')";
  
          if ($connection->query($sql) === TRUE) {
            echo '<script>alert("Registro Exitoso.");</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
          }
        }
      }
    $connection->close();
  }
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
      <h1 class="texto">Registro de Usuarios de SRH</h1>

      <form class="formulario2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2 class="texto-cuestionario">Nombre de Usuario</h2>
        <input class="entrada" type="name" name="nombre" placeholder="Nombre.Apellido">

        <h2 class="texto-cuestionario">Contraseña</h2>
        <input class="entrada" type="password" name="contraseña" placeholder="Contraseña">

        <h2 class="texto-cuestionario">Confirmar Contraseña</h2>
        <input class="entrada" type="password" name="Vcontraseña" placeholder="Repetir Contraseña">

        <h2 class="texto-cuestionario">Tipo de Cuenta</h2>
        <select class="selector" name="tipo">
          <option value="Paciente">Paciente</option>
          <option value="Funcionario">Funcionario</option>
        </select>

        <button class="boton" type="submit">Registrarme</button>
      </form>

      <h1 class="texto3">¿Ya tienes una cuenta?</h1>
      <a class="link" href="index.php">Iniciar Sesión</a>
    </main>
  </body>
</html>