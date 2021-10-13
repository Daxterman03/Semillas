<?php
require 'conexion.php';
$temporada = $_POST['temporada'];
$ano = $_POST['año'];
$dia = $_POST['dia'];
$barrio = $_POST['barrio'];
$calle = $_POST['calle'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];

$sql = "INSERT INTO pdo (temporada, ano, zona, calle, dia, dni, entregado)
                    values('$temporada', '$ano', '$barrio', '$calle', '$dia', '$dni', 'Si')";
$accion_insert = mysqli_query($conexion, $sql);

$sql_new = "INSERT into usu1 (nombre, apellido, mail, telefono, dni, direccion, inte)
                        values ('$nombre', 'NULL', 'Null', 'null', '$dni', 'null', 'null')";
$accion_insert_new = mysqli_query($conexion, $sql_new);

echo $temporada, $ano, $dia, $barrio, $calle, $nombre, $dni;