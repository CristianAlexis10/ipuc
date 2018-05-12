<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iglesia</title>
    <link rel="stylesheet" href="views/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
        <div class="cont--izq">
          <img src="views/assets/image/fondo.jpg" class="fondo">
        </div>
        <div class="cont--der">
          <img src="views/assets/image/logo-ipuc.png" class="logo">
          <?php
            if (isset($_SESSION['auth_user'])) { //si la cedula existe mostrar para ingresar la contraseña?>
              <form  id="formPass">
                <h2>INICIAR SESION</h2>
                <label for="pass--form">Contraseña: </label>
                <input type="password" id="pass--form"  name="data" required>
                <button type="submit" class="btn-pass-form">Ingresar</button>
              </form>
          <?php  }else{ //si no mostrar para que ingrese la cedula?>
            <form id="authForm">
              <h2>INICIAR SESION</h2>
              <label for="name--form">Documento de Identidad: </label>
              <input type="number" id="name--form"  name="data" required>
              <button type="submit" class="btn-pass-form">Siguiente</button>
            </form>
        <?php  } ?>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="views/assets/js/auth.js"></script>
    </body>
  </html>
