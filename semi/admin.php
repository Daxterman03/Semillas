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
            <form class="form_order" action="modificara.php" method="post">
              <input class="entrada" type="text" name="nombre" placeholder="<?php echo $mostrar['nombre']; ?>" required  />
              <input class="entrada" type="text" name="apellido" placeholder="<?php echo $mostrar['apellido']; ?>"required  />
              <input class="entrada" type="text" name="dni" placeholder="<?php echo $mostrar['dni']; ?>" required  />
              <input class="entrada" type="text" name="contra" placeholder="<?php echo $mostrar['contra']; ?>" required  />
              <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
              <input class="button" type="submit" value="Modificar">
            </form>
          </div>
        </div>
      </div>

      <?php include('pie.php') ?>

  <?php } ?>
  </html>
