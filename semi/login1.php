<?php
require 'conexion.php';
require 'navbar.php';
session_start();
  $nombre = $_POST['nombre'];
  $contra = $_POST['contra'];

    $q= "SELECT COUNT(*) as contar from admin where nombre = '$nombre ' and contra = '$contra'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['nombre'] = $nombre;
      header("location: admin.php");

    }else {
      echo "datos incorrectos";
    }
 ?>
