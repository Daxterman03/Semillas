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
    echo '<script type="text/javascript">
    alert("Se agregó el pedido correctamente");
    window.location.href="lfet.php";
    </script>';
  }
  mysqli_close($conexion);

  ?>