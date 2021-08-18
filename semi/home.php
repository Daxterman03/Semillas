<?php
require 'conexion.php';
require 'navbaru.php';
session_start();
$dni = $_SESSION['dni'];
$sql="SELECT * from usu1 where dni='$dni'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_assoc($result)) {

if(!isset($dni)){
    header("location: index");
} else {
?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
        </head>
        <body>
          <h1>Bienvenido<?php echo $mostrar['nombre']; ?></h1>
        </body>
      </html>
        <?php } ?>
<?php } ?>
