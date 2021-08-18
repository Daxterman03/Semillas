<?php
require '1a.php';
require 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    td{
      text-align: center;
    }
    form{background-color: rgb(227, 150, 133);
      color: rgb(191, 27, 50);
        }
        body{
          background-color: rgb(2, 128, 79)
        }
    </style>
  </head>
  <body>
    <h1>Datos del administrador</h1>
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
        <input style="width: 100%;" type="submit" value="Enviar">
      </form>
  </body>
</html>
