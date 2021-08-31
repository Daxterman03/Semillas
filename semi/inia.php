<?php
require 'navbar.php';
require 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="cuerpo_forms">
      <div class="form">
        <div class="form_head">
          <h1>Inicio de Sesión del Administrador</h1>
        </div>
        <div class="form_body">
          <form class="form_orderLog" action="login1.php" method="post">
            <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
            <input class="entrada" type="text" name="contra" placeholder="Contraseña" required  />
            <input class="button" type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>
    <?php include('pie.php')?>
  </body>
</html>
