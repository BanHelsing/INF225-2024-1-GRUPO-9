<?php

$db_server = "localhost";
$db_user   = "root";
$db_password = "";
$db_database = "ISW";

$connection = mysqli_connect($db_server, $db_user, $db_password, $db_database);

if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

?>
