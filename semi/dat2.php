<?php
require '1a.php';
require 'conexion.php';

//recibimos los datos de regis1
  $nombre    = $_POST["nombre"];
  $apellido  = $_POST["apellido"];
  $dni       = $_POST["dni"];
  $contra =$_POST["contra"];

//insertamos los datos obtenidos
$inserto = "INSERT INTO admin (nombre, apellido, dni, contra)
                      VALUES ('$nombre','$apellido','$dni','$contra')";

$veri_usu = mysqli_query($conexion, "SELECT * FROM admin WHERE dni = '$dni'");
if (mysqli_num_rows($veri_usu) > 0){
echo "el dni ya existe";
exit;


}

//ejecutamos la acción inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo "error al registrar";
}else {
  echo "registrado correcto";
}
mysqli_close($conexion);

 ?>
