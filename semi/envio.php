<?php
 require 'conexion.php';
 require '1u.php';


//resivimos los datos de regis1
  $temporada = $_POST['temporada'];
  $ano = $_POST['ano'];
  $zona  = $_POST['zona'];
  $calle      = $_POST['calle'];
  $dia  = $_POST['dia'];
  $dni       = $_POST['dni'];

//insertamos los datos obtenidos
$inserto = "INSERT INTO pdo (temporada, ano, zona, calle, dia, dni)
                      VALUES ('$temporada','$ano','$zona','$calle','$dia','$dni')";

                      $veri_ped = mysqli_query($conexion, "SELECT * FROM pdo WHERE dni = '$dni' AND temporada = '$temporada' AND ano = '$ano'");
                      if (mysqli_num_rows($veri_ped) > 0){
                      echo "uste ya pidio espere ala siguiente temporada";
                      exit;
}

//ejecutamos la axion inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo "error al pedir";
}else {
  echo "pedido enviado";
}
mysqli_close($conexion);
?>
