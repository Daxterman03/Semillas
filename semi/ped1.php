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
    <title></title>
    <link rel="stylesheet" href="css/ped1.css">
  </head>

  <body>
    <h1>Pedido</h1>
    <form action="envio.php" method="post">
      <table>
        <tr>
          <td>Temporada</td>
          <td>
            <label for="temporada"></label>
            <h><?php echo $mostrar['temporada']; ?></h>
            <input type="hidden" name="temporada"value="<?php echo $mostrar['temporada']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>Año</td>
          <td>
            <label for="ano"></label>
            <h><?php echo $mostrar['ano']; ?></h>
            <input type="hidden" name="ano"value="<?php echo $mostrar['ano']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>Zona</td>
          <td>
            <label for="zona"></label>
            <h><?php echo $mostrar['zona']; ?></h>
            <input type="hidden" name="zona"value="<?php echo $mostrar['zona']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>Calle</td>
          <td>
            <label for="calle"></label>
            <h><?php echo $mostrar['calle']; ?></h>
            <input type="hidden" name="calle" value="<?php echo $mostrar['calle']; ?>"required  />
          </td>
        </tr>
        <tr>
          <td>Día</td>
          <td>
            <label for="dia"></label>
            <h><?php echo $mostrar['dia']; ?></h>
            <input type="hidden" name="dia"value="<?php echo $mostrar['dia']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>
            <label for="id"></label>
            <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
          </td>
        </tr>
<?php } ?>
        <tr>
          <?php
          $dni = $_SESSION['dni'];

          $sql="SELECT * from usu1 where dni='$dni'";
          $result=mysqli_query($conexion,$sql);
          while($mostrar=mysqli_fetch_assoc($result)) {

          ?>
          <td>DNI</td>
            <td>
              <label for="dni"></label>
              <h><?php echo $mostrar['dni']; ?></h>
              <input type="hidden" name="dni"value="<?php echo $mostrar['dni']; ?>" required  />
            </td>
        </tr>
      </table>
      <input style="margin-left: 20%;" type="submit" value="pedir">
    </form>
<?php } ?>
</html>
