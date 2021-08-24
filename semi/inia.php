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
    <h1>Inicio de Sesión del Administrador</h1>
    <form action="login1.php" method="post">
      <table>
        <tr>
          <td>Nombre</td>
          <td>
            <label for="nombre"></label>
            <input type="text" name="nombre" required  />
          </td>
        </tr>
        <tr>
          <td>Contraseña</td>
          <td>
            <label for="contra"></label>
            <input type="text" name="contra" required  />
          </td>
        </tr>
      </table>
      <input style="width: 100%;" type="submit" value="Enviar">
    </form>
  </body>
</html>
