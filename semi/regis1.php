
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
      text-align: right;

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
    <h1>datos de usuario</h1>
<form action="dat1" method="post">
<table>
  <tr>
    <td>
        nombre
    </td>
    <td><label for="nom"></label>
      <input type="text" name="nombre" required  />
    </td>
  </tr>

  <tr>
    <td>
        apellido
    </td>
    <td><label for="apell"></label>
      <input type="text" name="apellido" required  />
    </td>
  </tr>

  <tr>
    <td>
        email
    </td>
    <td><label for="mail"></label>
      <input type="text" name="mail" required  />
    </td>
  </tr>

<tr>


  <td>
      telefono
    </td>
    <td><label for="telefono"></label>
      <input type="text" name="telefono" required  />
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


  <tr>
    <td>
      direccion
    </td>
      <td><label for="direccion"></label>
        <input type="text" name="direccion" required  />
      </td>

  </tr>
    <tr>
      <td>
        integrante de la familia
      </td>
      <td><label for="inte"></label>
        <input type="text" name="inte" required  />
      </td>



</table>
<input style="width: 100%;" type="submit" value="enviar">

</form>






</html>
