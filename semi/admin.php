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
      <link rel="stylesheet" href="css/ventana.css">
    </head>
    <body>
      <div class="cuerpo"></div>
      <div class="overlay" id="overlay">
        <div class="cuerpo_forms">
          <div class="popup" id="popup">
            <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
            <div class="form_head">
              <h1>Modificar Datos de Administrador</h1>
            </div>
            <div class="contenedor-inputs">
              <form class="form_order" action="modificara.php" method="post">
                <input class="entrada" type="text" name="nombre" placeholder="<?php echo $mostrar['nombre']; ?>" required  />
                <input class="entrada" type="text" name="apellido" placeholder="<?php echo $mostrar['apellido']; ?>"required  />
                <input class="entrada" type="number" name="dni" placeholder="<?php echo $mostrar['dni']; ?>" required  />
                <input class="entrada" type="password" name="contra" placeholder="Nueva Contraseña" required  />
                <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
                <button class="button-modal" type="submit">Modificar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
        
      <script src="js/popups.js"></script>
      <?php include('pie.php') ?>

  <?php } ?>
  </html>
