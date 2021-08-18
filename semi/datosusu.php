<?php

require 'conexion.php';



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $sql="SELECT * from usu1";
      $result=mysqli_query($conexion,$sql);
      while($mostrar=mysqli_fetch_assoc($result)) {


        echo "<tr>";
          echo "<td>"; echo $mostrar['nombre']; echo "</td>";
          echo "<td>"; echo $mostrar['apellido']; echo "</td>";
          echo "<td>"; echo $mostrar['mail']; echo "</td>";
          echo "<td>"; echo $mostrar['contrasena']; echo "</td>";
          echo "<td>"; echo $mostrar['telefono']; echo "</td>";
          echo "<td>"; echo $mostrar['dni']; echo "</td>";
          echo "<td>"; echo $mostrar['direccion']; echo "</td>";
          echo "<td>"; echo $mostrar['id']; echo "</td>";
          echo "</tr>";
}
?>
    <h1>ello worls</h1>
  </body>
</html>
