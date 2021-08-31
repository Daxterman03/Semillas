
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
    <div class="cuerpo_forms">
      <div class="form">
        <div class="form_head">
          <h1>Inicio de Sesión</h1>
        </div>
        <div class="form_body">
          <form class="form_orderLog" action="login.php" method="post">
            <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
            <input class="entrada" type="text" name="dni" placeholder="DNI" required  />
            <input class="button" type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>

    <?php include('pie.php')?>

  </body>
</html>