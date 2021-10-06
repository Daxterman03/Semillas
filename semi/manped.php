<?php
require 'conexion.php';
require 'navbar2.php';
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <link rel="stylesheet" href="css/pedido.css">
    </head>
    <body>
      <div class="cuerpo_ped">
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
                      <h5>Barrio</h5>
                      <label for="zona"><?php echo $mostrar['zona']?></label>
                    </div>
                  </div>
                </div>
          
                <?php echo "<a href='ped2.php?id=".$mostrar['id']."'>" ?>
                <button type='POST' class='button'>Pedir</button></a>
              </div>
          <?php }?>
        </div>
        <a class="formulario" href="https://docs.google.com/forms/d/e/1FAIpQLSd9aNHOmZ2Ufzgu0JAXUzFBvnrtFixAeSVgwncNUzEYFY7Prw/viewform?usp=sf_link">Cuéntanos cómo te fue con la cosecha</a>
      </div>
      <?php include('pie.php')?>
    </body>
  </html>
