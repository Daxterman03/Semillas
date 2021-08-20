<?php require 'conexion.php';
  require 'navbar2.php';
//resivimos los datos de lfet
  $temporada = $_POST["temporada"];
  $ano = $_POST["ano"];
  $zona    = $_POST["zona"];
  $calle  = $_POST["calle"];
  $dia = $_POST['dia'];


//insertamos los datos obtenidos
$inserto = "INSERT INTO lugares (temporada, ano, zona, calle,dia)
                      VALUES ('$temporada','$ano','$zona','$calle','$dia')";



  $resultado = mysqli_query($conexion, $inserto);
  if (!$resultado) {
    echo "error al registrar";
  }else {
    echo "registrado correcto";
  }
  mysqli_close($conexion);

  ?>