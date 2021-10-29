<?php
require 'conexion.php';

$id = $_POST['id'];
$check = $_POST['entregado'];

if ($check == "si" || $check == "Si"){
    $estado = "No";
}else{
    $estado = "Si";
}
$pdo = "UPDATE pdo SET entregado = '$estado' where id = '$id'";
$query = mysqli_query($conexion, $pdo);

mysqli_close($conexion);
