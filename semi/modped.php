<?php require 'conexion.php';
 require '1a.php';

    $clave = $_GET['id'];

    $sql="SELECT * from lugares where id='$clave'";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_assoc($result)) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/pedido_adm.css">
    <link rel="stylesheet" href="css/ventana.css">
  </head>
  <body>
    <div class="cuerpo_ped_adm"></div>
    <div class="overlay" id="overlay">
      <div class="nuevo_pedido">
        <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
        <h1>Ingrese los Datos a Modificar</h1>
        <form class="inputs_adm" action="modped1.php" method="post">
          <input type="text" name="temporada" value="<?php echo $mostrar['temporada']; ?>" required  />
          <input type="text" name="ano" value="<?php echo $mostrar['ano']; ?>" required  />
          <input type="date" name="dia" value="<?php echo $mostrar['dia']; ?>" required  />
          <input type="text" name="calle" value="<?php echo $mostrar['calle']; ?>"required  />
          <input type="text" name="zona" value="<?php echo $mostrar['zona']; ?>" required  />
          <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>" required  />
          <input class="button" type="submit" value="Modificar">
        </form>
      </div>
    </div>
    <script src="js/popups.js"></script>
    <?php include('pie.php')?>
  </body>
</html>
<?php } ?>
