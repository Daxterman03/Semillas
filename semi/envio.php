<?php
 require 'conexion.php';
 require '1u.php';


//recibimos los datos de regis1
  $temporada = $_POST['temporada'];
  $ano = $_POST['ano'];
  $zona  = $_POST['zona'];
  $calle      = $_POST['calle'];
  $dia  = $_POST['dia'];
  $dni       = $_POST['dni'];
//insertamos los datos obtenidos
$inserto = "INSERT INTO pdo (temporada, ano, zona, calle, dia, dni, entregado)
            VALUES ('$temporada','$ano','$zona','$calle','$dia','$dni', 'No')";

            $veri_ped = mysqli_query($conexion, "SELECT * FROM pdo WHERE dni = '$dni' AND dia = '$dia'");
            if (mysqli_num_rows($veri_ped) > 0){
              echo '
              <script type="text/javascript">
              alert("Usted ya encargó las semillas de esta temporada");
              window.location.href="home.php";
              </script>
              ';
            exit();
}

//ejecutamos la acción inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo '
  <script type="text/javascript">
  alert("Error al registrar su pedido");
  window.location.href="home.php";
  </script>
  ';
}else {
  echo '
  <script type="text/javascript">
  alert("Su pedido ha sido cargado exitosamente");
  window.location.href="home.php";
  </script>
  ';
}
mysqli_close($conexion);
?>
