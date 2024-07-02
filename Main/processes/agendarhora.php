<?php
include("../config/db.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rut=$_POST['rut'];
  $datetime=$_POST['datetime-local'];
  $tipo=$_POST['tipo'];
  $departamento=$_POST['depa'];

  $insertar="INSERT INTO exam (rut, datetime, exam_type, exam_department) VALUES ('$rut','$datetime','$tipo','$departamento')";
  $resultado=$connection->query($insertar);

  echo '<script>alert("Hora registrada correctamente.");</script>';
  if ($_SESSION['usuario_tipo'] == 'Funcionario') {
    header("Location: ../home2.php");
  } elseif ($_SESSION['usuario_tipo'] == 'Paciente') {
    header("Location: ../home.php");
  }

  $connection->close();
  exit;
}
?>