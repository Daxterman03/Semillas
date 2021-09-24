<?php
require 'conexion.php';
require '1a.php';

  $id = $_GET['id'];

  mysqli_query($conexion, "DELETE from pdo where id='$id'")
  or die ("Error al Eliminar");
    mysqli_close($conexion);
    header('Location: peda.php');
?>