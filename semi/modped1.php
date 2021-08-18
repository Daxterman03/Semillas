<?php
require 'conexion.php';

 require '1a.php';


 $temporada = $_POST["temporada"];
 $ano = $_POST["ano"];
 $zona = $_POST["zona"];
 $calle = $_POST["calle"];
 $dia = $_POST['dia'];


    $id = $_POST['id'];

  $sql_update = mysqli_query($conexion, "UPDATE lugares SET temporada = '$temporada', ano = '$ano',
    zona='$zona', calle = '$calle',dia = '$dia'





     WHERE id='$id'")
    or die ("error al modificar");
        mysqli_close($conexion);
        echo "datos actualisados";
    ?>
