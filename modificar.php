<?php
require 'conexion.php';

 require '1a.php';


 $temporada = $_POST["temporada"];
 $desde = $_POST["desde"];
 $asta = $_POST["asta"];


    $id = $_POST['id'];

  $sql_update = mysqli_query($conexion, "UPDATE fecha SET temporada = '$temporada', desde = '$desde',
    asta='$asta'





     WHERE id='$id'")
    or die ("error al modificar");
        mysqli_close($conexion);
        echo "datos actualisados";
    ?>
