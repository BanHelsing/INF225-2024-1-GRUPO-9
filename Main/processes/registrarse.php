<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
    $tipo = $_POST["tipo"];
    $Vcontraseña = $_POST["Vcontraseña"];
  
    if ($contraseña !== $Vcontraseña) {
        echo '<script>alert("Las contraseñas no coinciden. Intentalo de nuevo.");</script>';
        header("Location: ../signup.php");
        exit;
    } else {
        $sql_verificar = "SELECT * FROM users WHERE nombre = '$nombre'";
        $resultado = $connection->query($sql_verificar);

        if ($resultado->num_rows > 0) {
            echo '<script>alert("El usuario ya existe. Por favor, elige otro nombre de usuario.");</script>';
            header("Location: ../signup.php");
            exit;
        } else {
            $sql = "INSERT INTO users (nombre, contraseña, tipo) VALUES ('$nombre', '$contraseña', '$tipo')";
  
            if ($connection->query($sql) === TRUE) {
                echo '<script>alert("Registro Exitoso.");</script>';
                header("Location: ../index.php");
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
                header("Location: ../signup.php");
                exit;
            }
        }
    }
} else {
    echo '<script>alert("Rellene los campos correctamente.");</script>';
    header("Location: ../signup.php");
    exit;
}
$connection->close();