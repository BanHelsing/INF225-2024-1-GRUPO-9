<?php
    include('./config/db.php');
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-color:#fff1ee">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRH</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/images/icons8-caduceus-16.png"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"
    />
  </head>
<header class="pico-background-violet-100">
    <main class="container">
      <nav >
        <ul>
          <ul>
            <img
              src="./assets/images/cardiogram.png"
              style="width: 100px; padding-left: 20px"
              alt=""
            />
            <h2
              style="
                font-family: 'Lucida Sans', 'Lucida Sans Regular',
                  'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana,
                  sans-serif;
                padding-left: 10px;
                padding-top: 13px;
              "
            >
              SRH
            </h2>
          </ul>
        </ul>
        <ul>
          <li><a href="index.php" class="contrast">Home</a></li>
          <li><a href="revisarhoras.php" class="contrast">Revisar Horas</a></li>
          <li><a href="agendar.php" class="contrast">Agendar</a></li>
          <li><a href="login.php"><button class="primary">Iniciar Sesion</button></a></li>
          <li><a href="signup.php"><button class="primary">Registrarse</button></li>
        </ul>
      </nav>
    </main>
  </header>