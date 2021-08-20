<?php
require 'conexion.php';

 require '1a.php';


    $entregado = "si";
    $id = $_GET['id'];


  $sql_update = mysqli_query($conexion, " UPDATE pdo SET entregado = '$entregado'





     WHERE id='$id'")
    or die ("Error al Modificar");
        mysqli_close($conexion);
        echo "Datos Actualizados";
    ?>
