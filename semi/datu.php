<?php
require '1u.php';
require 'conexion.php';

    $dni = $_SESSION['dni'];

    $sql="SELECT * from usu1 where dni='$dni'";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body>
      <div class="cuerpo">
        <div class="form">
          <div class="form_head">
            <h1>Modificar Datos de Usuario</h1>
          </div>
          <div class="form_body">
            <form action="modificaru.php" method="post">
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
                  <td>Mail</td>
                  <td>
                    <label for="mail"></label>
                    <input type="text" name="mail"value="<?php echo $mostrar['mail']; ?>" required  />
                  </td>
                </tr>
                <tr>
                  <td>Telefono</td>
                  <td>
                    <label for="telefono"></label>
                    <input type="text" name="telefono"value="<?php echo $mostrar['telefono']; ?>" required  />
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
                  <td>Dirección</td>
                  <td>
                    <label for="direxion"></label>
                    <input type="text" name="direccion"value="<?php echo $mostrar['direccion']; ?>" required  />
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <label for="id"></label>
                    <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
                  </td>
                </tr>
              </table>
              <div class="button">
                <input type="submit" value="Modificar">
              </div>
            </form>
          </div>
        </div>
      </div>
 <?php } ?>
     <?php include('pie.php')?>
 </html>
