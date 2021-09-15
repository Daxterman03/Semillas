<?php
require 'conexion.php';
require '1a.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$contra = $_POST["contra"];


   $id = $_POST['id'];

 $sql_update = mysqli_query($conexion, "UPDATE admin SET nombre = '$nombre', apellido = '$apellido',
  dni = '$dni', contra = '$contra'





    WHERE id='$id'")
   or die ("Error al actualizar los datos");
       mysqli_close($conexion);
       echo '
       <script type="text/javascript">
       alert("Datos Modificados Correctamente");
       window.location.href="lfet.php";
       </script>
       ';

  session_destroy();
    $_SESSION['nombre'] = $nombre;
  session_start();
      $_SESSION['nombre'] = $nombre;


   ?>
