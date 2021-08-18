<?php
require '1a.php';
require 'conexion.php';

//resivimos los datos de regis1
  $nombre    = $_POST["nombre"];
  $pag  = $_POST["pag"];


//insertamos los datos obtenidos
$inserto = "INSERT INTO tutorial (nombre, pag)
                      VALUES ('$nombre','$pag')";



//ejecutamos la axion inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo "error al registrar";
}else {
  echo "registrado correcto";
}
mysqli_close($conexion);

 ?>
