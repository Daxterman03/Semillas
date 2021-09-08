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
    <link rel="stylesheet" href="css/ventana.css">
  </head>
    <body>
      <div class="cuerpo">

      </div>
      <div class="overlay" id="overlay">
        <div class="cuerpo_forms">
          <div class="popup" id="popup">

              <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
              <div class="form_head">
                <h1>Ingrese sus nuevos datos</h1>
              </div>
              <div class="contenedor-inputs">
                <form class="form_order" action="modificaru.php" method="post">
                  <input class="entrada" type="text" name="nombre" placeholder="Nombre: <?php echo $mostrar['nombre']; ?>" required  />
                  <input class="entrada" type="text" name="apellido" placeholder="Apellido: <?php echo $mostrar['apellido']; ?>"required  />
                  <input class="entrada" type="text" name="dni" placeholder="DNI: <?php echo $mostrar['dni']; ?>" required  />
                  <input class="entrada" type="text" name="mail" placeholder="Mail: <?php echo $mostrar['mail']; ?>" required  />
                  <input class="entrada" type="text" name="telefono" placeholder="Teléfono: <?php echo $mostrar['telefono']; ?>" required  />
                  <input class="entrada" type="text" name="direccion" placeholder="Dirección: <?php echo $mostrar['direccion']; ?>" required  />
                  <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
                  <input class="button" type="submit" value="Modificar">
                </form>
              </div>

          </div>
        </div>
      </div>
      <script src="js/popups.js"></script>
      <?php include('pie.php'); ?>
    </body>
    <?php } ?>
 </html>
