<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=$_POST['nombre'];
    $rut=$_POST['rut'];
    $fecha_nac=$_POST['fecha_nacimiento'];
    $alergias=$_POST['alergias'];
    $fonasa=$_POST['tramo_fonasa'];
    $medico_deriva=$_POST['medico_deriva'];
    $diagnostico=$_POST['diagnostico'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    $insertar="INSERT INTO informacion (Nombre,Rut,Fecha_nacimiento,Alergias,Tramo_fonasa,Médico_deriva,Posible_diag,Direccion,Telefono) VALUES ('$nombre','$rut','$fecha_nac','$alergias','$fonasa','$medico_deriva','$diagnostico','$direccion','$telefono')";
    $resultado=$connection->query($insertar);
    header("Location: ../home.php");
    }