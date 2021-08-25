
<?php require 'conexion.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <?php include('navbar.php')?>
    <div class="cuerpo">
      <div class="form">
        <div class="form_head">
          <h1>Ingrese sus datos</h1>
        </div>
        <div class="form_body">
          <form action="dat1.php" method="post">
            <table>
              <tr>
                <td>Nombre</td>
                <td>
                  <label for="nom"></label>
                  <input type="text" name="nombre" required  />
                </td>
              </tr>
              <tr>
                <td>Apellido</td>
                <td>
                  <label for="apell"></label>
                  <input type="text" name="apellido" required  />
                </td>
              </tr>
              <tr>
                <td>Email</td>
                <td>
                  <label for="mail"></label>
                  <input type="text" name="mail" required  />
                </td>
              </tr>
              <tr>
                <td>Teléfono</td>
                <td>
                  <label for="telefono"></label>
                  <input type="text" name="telefono" required  />
                </td>
              </tr>
              <tr>
                <td>DNI</td>
                <td>
                  <label for="dni"></label>
                  <input type="text" name="dni" required  />
                </td>
              </tr>
              <tr>
                <td>Dirección</td>
                  <td>
                    <label for="direccion"></label>
                    <input type="text" name="direccion" required  />
                  </td>
              </tr>
              <tr>
                <td>Integrantes de la familia</td>
                <td>
                  <label for="inte"></label>
                  <input type="text" name="inte" required  />
                </td>
              </tr>
            </table>
            <input type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>

    <?php include('pie.php') ?>

  </body>
</html>
