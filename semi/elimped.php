<?php
require 'conexion.php';
require '1a.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eliminar</title>
  </head>
  <body>
    <?php

    $id = $_GET['id'];

    mysqli_query($conexion, "DELETE from lugares where id='$id'")
    or die ("error al eliminar");
        mysqli_close($conexion);
        echo "lugar eliminado";
    ?>
    
  </body>
</html>
