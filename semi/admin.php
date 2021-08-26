<?php
require '1a.php';
require 'conexion.php';

  $nombre = $_SESSION['nombre'];

  $sql="SELECT * from admin where nombre='$nombre'";
  $result=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_assoc($result)) {

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
            <h1>Modificar Datos de Usuario</h1>
          </div>
          <div class="form_body">
            <form action="modificara.php" method="post">
              <table>
                <tr>
                  <td>Nombre</td>
                  <td>
                    <label for="nombre"></label>
                    <input type="text" name="nombre"value="<?php echo $mostrar['nombre']; ?>" required  />
                  </td>
                </tr>
                <tr>
                  <td>Apellido</td>
                  <td>
                    <label for=apellido></label>
                    <input type="text" name="apellido" value="<?php echo $mostrar['apellido']; ?>"required  />
                  </td>
                </tr>
                <tr>
                  <td>DNI</td>
                  <td>
                    <label for="dni"></label>
                    <input type="text" name="dni"value="<?php echo $mostrar['dni']; ?>" required  />
                  </td>
                </tr>
                <tr>
                  <td>Clave</td>
                  <td>
                    <label for="contra"></label>
                    <input type="text" name="contra"value="<?php echo $mostrar['contra']; ?>" required  />
                  </td>
                </tr>
                <tr>
                  <td>ID</td>
                  <td>
                    <label for="id"></label>
                    <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
                  </td>
                </tr>
              </table>
              <input class="button" type="submit" value="Modificar">
            </form>
          </div>
        </div>
      </div>

      <?php include('pie.php') ?>

  <?php } ?>
  </html>
