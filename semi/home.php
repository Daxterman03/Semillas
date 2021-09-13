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
        <h2>Semillas de temporada</h2>
        <div class="orden_pedidos">
          <?php
            $sql="SELECT * from lugares";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_assoc($result)) { ?>
              <div class="pedido">
                <div class="temporada">
                  <h4>Temporada</h4>
                  <label for="temporada"><?php echo $mostrar['temporada']?></label>
                  <label for="año"><?php echo $mostrar['ano']?></label>
                </div>
                <div class="centro_pedido">
                  <div class="retiro">
                    <h5>Se retira el</h5>
                    <label for="fecha"><?php echo $mostrar['dia']?></label>
                  </div>
                  <div class="lugar">
                    <div>
                      <h5>Calle</h5>
                      <label for="calle"><?php echo $mostrar['calle']?></label>
                    </div>
                    <div>
                      <h5>Zona</h5>
                      <label for="zona"><?php echo $mostrar['zona']?></label>
                    </div>
                  </div>
                </div>
                <?php echo "<a href='ped1.php?id=".$mostrar['id']."'>" ?>
                <button type='button' class='button'>Pedir</button></a>
              </div>
          <?php }?>
        </div>
        <a class="formulario" href="https://docs.google.com/forms/d/e/1FAIpQLSd9aNHOmZ2Ufzgu0JAXUzFBvnrtFixAeSVgwncNUzEYFY7Prw/viewform?usp=sf_link">Cuéntanos cómo te fue con la cosecha</a>
      </div>
      <?php include('pie.php')?>
    </body>
  </html>
        <?php } ?>
<?php } ?>

