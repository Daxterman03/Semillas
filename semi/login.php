<?php
require 'conexion.php';
session_start();
  $nombre = $_POST['nombre'];
  $dni = $_POST['dni'];

    $q= "SELECT COUNT(*) as contar from usu1 where nombre = '$nombre ' and dni = '$dni'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['dni'] = $dni;
      header("location:home.php");

    }else {
      // Mensaje de alerta con su respectivo redireccionamiento
      echo '
      <script type="text/javascript">
      alert("Datos incorrectos");
      window.location.href="login_page.php";
      </script>
      ';
    }
 ?>
