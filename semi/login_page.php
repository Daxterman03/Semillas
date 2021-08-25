
<?php require 'conexion.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <?php include('navbar.php') ?>
    <div class="cuerpo">
      <div class="form">
        <div class="form_head">
          <h1>Inicio de Sesión</h1>
        </div>
        <div class="form_body">
          <form action="login.php" method="post">
            <table>
              <tr>
                <td>Nombre</td>
                <td>
                  <input type="text" name="nombre" required  />
                </td>
              </tr>
              <tr>
                <td>DNI</td>
                <td>
                  <input type="text" name="dni" required  />
                </td>
              </tr>
            </table>
            <input class="button" type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>

    <?php include('pie.php')?>

  </body>
</html>