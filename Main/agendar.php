<?php
    include './config/db.php';
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
    <link rel="stylesheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.indigo.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css"
    />
  </head>
  
  <div id="header"></div>
  
  <body style= "background-color:#fff1ee" >
    <main class="container">
        <article>
          <form action="./processes/agendarhora.php" method="post">
              <fieldset>
                <label>
                  Rut del Paciente
                  <input
                    name="rut"
                    placeholder="Rut"
                    autocomplete="given-name"
                  />
                </label>
                Fecha de examen
                <input type="datetime-local" name="datetime-local" aria-label="Datetime local" />
                <label>
                    Tipo de examen
                    <input
                      name="tipo"
                      placeholder="Tipo examen"
                      autocomplete="given-name"
                    />
                  </label>
                <label>
                  Departamento del examen
                  <input
                    name="depa"
                    placeholder="Departamento"
                    autocomplete="email"
                  /> 
                </label>
              </fieldset>
              <input type="submit" name="Ingresar" value="Ingresar Hora" />
              <a class="link" href="home.php">Volver al Inicio</a>
            </form>
          </article>       
    </main>
  </body>
</html>