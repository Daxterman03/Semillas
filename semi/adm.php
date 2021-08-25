<?php
require '1a.php';
require 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="cuerpo">
      <div class="form">
        <div class="form_head">
          <h1>Datos del administrador</h1>
        </div>
        <div class="form_body">
          <form action="dat2" method="post">
            <table>
              <tr>
                <td>Nombre</td>
                <td><label for="nom"></label>
                  <input type="text" name="nombre" required  />
                </td>
              </tr>
              <tr>
                <td>Apellido</td>
                <td><label for="apell"></label>
                  <input type="text" name="apellido" required  />
                </td>
              </tr>
              <tr>
                <td>DNI</td>
                <td><label for="dni"></label>
                <input type="text" name="dni" required  />
              </tr>
              <tr>
                <td>Contraseña</td>
                <td><label for="contra"></label>
                <input type="text" name="contra" required  />
              </tr>
            </table>
            <input class="button" type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>
      <?php include('pie.php') ?>
  </body>
</html>
