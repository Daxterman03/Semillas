
<?php require 'conexion.php';

 require 'navbar.php';

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
        body{
          background-color: rgb(2, 128, 79)
        }
    </style>





  </head>
  <body>
    <h1>inisio de sesion como usuario</h1>
<form action="login.php" method="post">
<table>
  <tr>
    <td>
        nombre
    </td>
    <td><label for="nombre"></label>
      <input type="text" name="nombre" required  />
    </td>
  </tr>

  <tr>
    <td>
        dni
    </td>
    <td><label for="dni"></label>
      <input type="text" name="dni" required  />
    </td>
  </tr>

</table>
<input style="width: 100%;" type="submit" value="enviar">

</form>
