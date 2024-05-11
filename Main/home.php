<?php
    include('./header.php');
    include('./config/db.php');
?>

<!DOCTYPE html>
<html data-theme="light" lang="en" style= "background-color:#fff1ee" >
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
  <body>

    <main class="container">
    <article >
      
        <form action="">
          <fieldset>
            <label>
              Nombre Usuario
              <input
                name="Username"
                placeholder="nombre.apellido"
                autocomplete="given-name"
              />
            </label>
            <label>
              Email
              <input
                type="email"
                name="email"
                placeholder="Email"
                autocomplete="email"
              />
            </label>
          </fieldset>
          <input type="submit" value="Iniciar Sesion" />
        </form>
      </article>
      </main>
  </body>
</html>