
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
          <form class="form_order" action="dat1.php" method="post">
            <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
            <input class="entrada" type="text" name="apellido" placeholder="Apellido" required  />
            <input class="entrada" type="text" name="mail" placeholder="Mail" required  />
            <input class="entrada" type="text" name="telefono" placeholder="Teléfono" required  />
            <input class="entrada" type="text" name="dni" placeholder="DNI" required  />
            <input class="entrada" type="text" name="direccion" placeholder="Dirección" required  />
            <input class="entrada" type="text" name="inte" placeholder="Integrantes grupo familiar" required  />
            <input class="button" type="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>

    <?php include('pie.php') ?>

  </body>
</html>
