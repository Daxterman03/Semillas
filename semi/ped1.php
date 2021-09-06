<?php require 'conexion.php';
 require '1u.php';

    $clave = $_GET['id'];

    $sql="SELECT * from lugares where id='$clave'";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="cuerpo_ped">
      <div class="ped_realiz">
        <h1>Pedido</h1>
        <form action="envio.php" method="post">
          <div class="info_ped">
            <div class="seccion">
              <label for="temporada">Temporada</label>
              <h><?php echo $mostrar['temporada']; ?></h>
              <input type="hidden" name="temporada"value="<?php echo $mostrar['temporada']; ?>" required  />
            </div>
            <div class="seccion">
              <label for="ano">Año</label>
              <h><?php echo $mostrar['ano']; ?></h>
              <input type="hidden" name="ano"value="<?php echo $mostrar['ano']; ?>" required  />
            </div>
            <div class="seccion">
              <label for="zona">Zona</label>
              <h><?php echo $mostrar['zona']; ?></h>
              <input type="hidden" name="zona"value="<?php echo $mostrar['zona']; ?>" required  />
            </div>
            <div class="seccion">
              <label for="calle">Calle</label>
              <h><?php echo $mostrar['calle']; ?></h>
              <input type="hidden" name="calle" value="<?php echo $mostrar['calle']; ?>"required  />  
            </div>
            <div class="seccion">
              <label for="dia">Día</label>
              <h><?php echo $mostrar['dia']; ?></h>
              <input type="hidden" name="dia"value="<?php echo $mostrar['dia']; ?>" required  />
            </div>
              <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
            <?php } ?>
            <?php
              $dni = $_SESSION['dni'];

              $sql="SELECT * from usu1 where dni='$dni'";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_assoc($result)) {

              ?>
              <div class="seccion">
                <label for="dni">DNI</label>
                <h><?php echo $mostrar['dni']; ?></h>
                <input type="hidden" name="dni"value="<?php echo $mostrar['dni']; ?>" required  />
              </div>
          </div>
          <input class="button" type="submit" value="Confirmar">
        </form>
      </div>
    </div>
    <?php include('pie.php')?>
  </body>
<?php } ?>
</html>
