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
            <h1>Ingrese sus nuevos datos</h1>
          </div>
          <div class="form_body">
            <form class="form_order" action="modificaru.php" method="post">
              <input class="entrada" type="text" name="nombre" placeholder="<?php echo $mostrar['nombre']; ?>" required  />
              <input class="entrada" type="text" name="apellido" placeholder="<?php echo $mostrar['apellido']; ?>"required  />
              <input class="entrada" type="text" name="dni" placeholder="<?php echo $mostrar['dni']; ?>" required  />
              <input class="entrada" type="text" name="mail" placeholder="<?php echo $mostrar['mail']; ?>" required  />
              <input class="entrada" type="text" name="telefono" placeholder="<?php echo $mostrar['telefono']; ?>" required  />
              <input class="entrada" type="text" name="direccion" placeholder="<?php echo $mostrar['direccion']; ?>" required  />
              <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
              <input class="button" type="submit" value="Modificar">
            </form>
          </div>
        </div>
      </div>
      <?php include('pie.php') ?>
    </body>
    <?php } ?>
 </html>
