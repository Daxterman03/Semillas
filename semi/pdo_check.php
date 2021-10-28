<?php
require 'conexion.php';

$id = $_POST['id'];

$pdo = 'UPDATE pdo SET "entregado" = "Si" where "id" = $id';
$query = mysqli_query($conexion, $pdo);
