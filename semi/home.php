<?php
require 'navbaru.php';
session_start();
$dni = $_SESSION['dni'];
if(!isset($dni)){
    header("location: index");
} else {
  echo "<h1>BIENVENIDO $dni </h1>";
}


 ?>
