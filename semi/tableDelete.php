<?php
require 'conexion.php';

$id = $_POST['id'];

$pdo = "DELETE FROM pdo WHERE id = '$id'";
$query = mysqli_query($conexion, $pdo);

mysqli_close($conexion);
