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
      <link rel="stylesheet" href="css/pedido.css">
  </head>
  <body>
    <div class="cuerpo_ped">
      <h1>Pedido</h1>
      <div class="pedido">
        <form action="envio.php" method="post">
          <div class="info_ped">
            <div class="temporada">
              <h4>Temporada</h4>
              <label for='temporada'><?php echo $mostrar['temporada']; ?></label>
              <input type="hidden" name="temporada"value="<?php echo $mostrar['temporada']; ?>" required  />
              <label for='ano'><?php echo $mostrar['ano']; ?></label>
              <input type="hidden" name="ano"value="<?php echo $mostrar['ano']; ?>" required  />
            </div>
            <div class="centro_pedido">
              <div class="retiro">
                <h5>Día</h5>
                <label><?php echo $mostrar['dia']; ?></label>
                <input type="hidden" name="dia"value="<?php echo $mostrar['dia']; ?>" required  />
              </div>
              <div class="lugar">
                <div>
                  <h5>Calle</h5>
                  <label><?php echo $mostrar['calle']; ?></label>
                  <input type="hidden" name="calle" value="<?php echo $mostrar['calle']; ?>"required  />  
                </div>
                <div>
                  <h5>Zona</h5>
                  <label><?php echo $mostrar['zona']; ?></label>
                  <input type="hidden" name="zona"value="<?php echo $mostrar['zona']; ?>" required  />
                </div>
              </div>
              <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
              <?php } ?>
              <?php
              $dni = $_SESSION['dni'];
              
              $sql="SELECT * from usu1 where dni='$dni'";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_assoc($result)) {
                
                ?>
              <div class="pedido_usuario">
                <h5>DNI</h5>
                <label><?php echo $mostrar['dni']; ?></label>
                <input type="hidden" name="dni"value="<?php echo $mostrar['dni']; ?>" required  />
              </div>
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
