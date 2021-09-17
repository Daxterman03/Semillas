<?php
require '1a.php';
require 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/ventana.css">
  </head>
  <body>
    <div class="cuerpo"></div>
    <div class="overlay" id="overlay">
      <div class="cuerpo_forms">
        <div class="popup" id="popup">
          <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
          <div class="form_head">
            <h1>Datos del administrador</h1>
          </div>
          <div class="contenedor-inputs">
            <form class="form_order" action="dat2" method="post">
              <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
              <input class="entrada" type="text" name="apellido" placeholder="Apellido" required  />
              <input class="entrada" type="number" name="dni" placeholder="DNI" required  />
              <input class="entrada" type="text" name="contra" placeholder="Contraseña" required  />
              <button class="button-modal" type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/popups.js"></script>
      <?php include('pie.php') ?>
  </body>
</html>
