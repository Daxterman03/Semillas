<?php require 'conexion.php';
  require 'navbar.php';
//recibimos los datos de regis1
  $nombre    = $_POST["nombre"];
  $apellido  = $_POST["apellido"];
  $mail      = $_POST["mail"];
  $telefono  = $_POST["telefono"];
  $dni       = $_POST["dni"];
  $direccion = $_POST["direccion"];
  $inte      = $_POST["inte"];

//insertamos los datos obtenidos
$inserto = "INSERT INTO usu1 (nombre, apellido, mail, telefono, dni, direccion,inte)
                      VALUES ('$nombre','$apellido','$mail','$telefono','$dni','$direccion','$inte')";

$veri_usu = mysqli_query($conexion, "SELECT * FROM usu1 WHERE dni = '$dni'");
if (mysqli_num_rows($veri_usu) > 0){
echo "El DNI ya existe";
header('Location: regis1.php');
exit;
}

//ejecutamos la acción inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo "Error al Registrar";
}else {
  echo "Registrado Correcto";
}
mysqli_close($conexion);
header('Location: login_page.php')

?>
