<?php
require 'conexion.php';
require '1u.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail  = $_POST["mail"];
$telefono = $_POST["telefono"];
$dni = $_POST["dni"];
$direccion = $_POST["direccion"];


   $id = $_POST['id'];

 $sql_update = mysqli_query($conexion, "UPDATE usu1 SET nombre = '$nombre', apellido = '$apellido',
   mail='$mail', telefono='$telefono', dni = '$dni', direccion = '$direccion'





    WHERE id='$id'")
   or die ("El dni ya esta en uso");
       mysqli_close($conexion);
         echo '
         <script type="text/javascript">
         alert("Los datos han sido actualizados correctamente");
         window.location.href="datu.php";
         </script>
         ';
       exit();

  session_destroy();
    $_SESSION['dni'] = $dni;
  session_start();
      $_SESSION['dni'] = $dni;


   ?>
