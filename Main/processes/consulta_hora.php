<?php

include ("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rut=$_POST['rut'];

    // $consulta="SELECT * FROM exam WHERE rut='$rut'";
    // $resultado=$connection->query($consulta);
    // echo "Hola mundo";

    $consulta=mysqli_query($connection,"SELECT * FROM exam WHERE rut='$rut'");
    $verificacion=mysqli_num_rows($consulta);
    //header("Location: ../revisarhoras.php");
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
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
<?php
if ($verificacion!=0){
    $contador=1;
    while($mostrar=mysqli_fetch_array($consulta)){
        ?>
        <h5>Hora numero <?php echo "   ".$contador." "?>registrada</h5>
        <h5>Fecha: <?php echo "   ".$mostrar[2]."<br>"?> </h5>
        <h5>Tipo de examen: <?php echo "   ".$mostrar[3]."<br>"?> </h5>
        <h5>Departamento del examen: <?php echo "   ".$mostrar[4]."<br>"?> </h5>
        <br><br>
        <?php
        $contador+=1;
    }
}else{
    echo "El rut ingresado no tiene horas agendadas";
}
?>
    <a type="button" href="../revisarhoras.php">Volver a pagina anterior</a>