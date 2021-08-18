<?php
require 'conexion.php';
require '1a.php';



 ?>
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eliminar</title>
  </head>
  <body>
    <?php

    $id = $_GET['id'];

    mysqli_query($conexion, "DELETE from pdo where id='$id'")
    or die ("error al eliminar");
        mysqli_close($conexion);
        echo "pedido eliminado";
    ?>



  </body>
</html>
