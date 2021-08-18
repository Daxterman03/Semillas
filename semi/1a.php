<?php
require 'conexion.php';
require 'navbar2.php';
session_start();
$nombre = $_SESSION['nombre'];
if(!isset($nombre)){
    header("location: index");
} else {

}
 ?>
