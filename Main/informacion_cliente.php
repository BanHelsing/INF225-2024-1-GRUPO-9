<?php
include './config/db.php';
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario del paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff1ee;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top:250px;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .container input[type="text"],
        .container input[type="date"],
        .container input[type="tel"],
        .container select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario del paciente</h1>
        <form action="./processes/guardar_informacion.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

            <label for="alergias">Alergias:</label>
            <input type="text" id="alergias" name="alergias" required>

            <label for="tramo_fonasa">Tramo Fonasa:</label>
            <select id="tramo_fonasa" name="tramo_fonasa" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>

            <label for="medico_deriva">Médico que lo Deriva:</label>
            <input type="text" id="m_deriva" name="medico_deriva" required>

            <label for="diagnostico">Posible Diagnóstico:</label>
            <input type="text" id="diagnostico" name="diagnostico">

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <input type="submit" value="Guardar información">
            <a type="submit" href="./home.php">Volver</a>

        </form>
    </div>
</body>
</html>