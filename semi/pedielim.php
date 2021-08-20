<?php
require 'conexion.php';
require '1a.php';



 ?>
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar</title>
  </head>
  <body>
    <?php

    $id = $_GET['id'];

    mysqli_query($conexion, "DELETE from pdo where id='$id'")
    or die ("Error al Eliminar");
        mysqli_close($conexion);
        echo "Pedido Eliminado";
    ?>



  </body>
</html>
