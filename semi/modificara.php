<?php
require 'conexion.php';
require '1a.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$contra = $_POST["contra"];


   $id = $_POST['id'];

 $sql_update = mysqli_query($conexion, "UPDATE admin SET nombre = '$nombre', apellido = '$apellido',
  dni = '$dni', contra = '$contra'





    WHERE id='$id'")
   or die ("dni ya esta en uso");
       mysqli_close($conexion);
       echo "datos actualisados";

  session_destroy();
    $_SESSION['nombre'] = $nombre;
  session_start();
      $_SESSION['nombre'] = $nombre;


   ?>
