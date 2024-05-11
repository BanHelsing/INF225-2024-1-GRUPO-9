<?php
  include("../config/db.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
    $tipo = $_POST["tipo"];

    $sql_verificar = "SELECT * FROM users WHERE nombre = '$nombre' AND contraseña = '$contraseña' AND tipo = '$tipo'";
    $resultado = $connection->query($sql_verificar);

    if ($resultado->num_rows > 0) {
      header("Location: ../home.php");
      exit;
    } else {
      echo '<script>alert("Usuario, contraseña o tipo incorrectos.");</script>';
      header("Location: ../index.php");
      exit;
    }
  } else {
    echo '<script>alert("Rellene los campos correctamente.");</script>';
    header("Location: ../index.php");
    exit;
  }
  $connection->close();