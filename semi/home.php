<?php
require 'conexion.php';
require 'navbaru.php';
session_start();
$dni = $_SESSION['dni'];
$sql="SELECT * from usu1 where dni='$dni'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_assoc($result)) {

if(!isset($dni)){
    header("location: index.php");
} else {
?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
        </head>
        <body>
          <div class="cuerpo_ped">
          <h1>Bienvenido <?php echo $mostrar['nombre']; ?></h1>
          <h1>Pedidos de Semillas</h1>
          <?php
            $sql="SELECT * from lugares";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_assoc($result)) {
              echo '<div class="pedido">';
                echo '<div class="temporada">';
                  echo '<h4>Temporada</h4>'; 
                  echo '<label for="temporada">'.$mostrar['temporada'].'</label>';
                  echo '<label for="año">'.$mostrar['ano'].'</label>';
                echo'</div>';
                echo '<div class="retiro">';
                  echo '<h5>Se retira el</h5>';
                  echo '<label for="fecha">'.$mostrar['dia'].'</label>';
                echo '</div>';
                echo '<div class="lugar">';
                  echo '<h5>Calle</h5>';
                  echo '<label for="calle">'.$mostrar['calle'].'</label>';
                  echo '<h5>Zona</h5>';
                  echo '<label for="zona">'.$mostrar['zona'].'</label>';
                echo '</div>';
                echo "<a href='ped1.php?id=".$mostrar['id']."'> <button type='button' class='button'>Pedir</button></a>";
              echo '</div>';
          }?>
          <a class="formulario" href="https://docs.google.com/forms/d/e/1FAIpQLSd9aNHOmZ2Ufzgu0JAXUzFBvnrtFixAeSVgwncNUzEYFY7Prw/viewform?usp=sf_link">Cuéntanos cómo te fue con la cosecha</a>
          </div>
          <?php include('pie.php')?>
        </body>
      </html>
        <?php } ?>
<?php } ?>

