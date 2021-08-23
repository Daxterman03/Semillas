<?php
require 'conexion.php';
session_start();
  $nombre = $_POST['nombre'];
  $dni = $_POST['dni'];

    $q= "SELECT COUNT(*) as contar from usu1 where nombre = '$nombre ' and dni = '$dni'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['dni'] = $dni;
      header("location:home.php");

    }else {
      echo "Datos Incorrectos";
      header('location:login_page.php');
    }
 ?>
