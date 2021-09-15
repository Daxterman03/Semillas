<?php
require 'conexion.php';
require '1a.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/pedido_adm.css">
  </head>
  <body>
    <div class="cuerpo_ped_adm">
      <div class="nuevo_pedido">
        <h1>Ingrese nuevo pedido</h1>
        <form class="inputs_adm" action="zona.php" method="post">
          <input type="text" name="temporada" placeholder="Temporada" required  />
          <input type="text" name="ano" placeholder="Año" required  />
          <input type="text" name="zona" placeholder="Zona" required  />
          <input type="text" name="calle" placeholder="Calle" required  />
          <input type="date" name="dia" placeholder="Día" required  />
          <input class="button" type="submit" value="Enviar">
        </form>
      </div>
      <div class="pedidos_vigentes">
        <h1>Pedidos Vigentes</h1>
        <table class="tabla">
          <tr class="primera_fila">
            <td>Temporada</td>
            <td>Año</td>
            <td>Zona</td>
            <td>Calle</td>
            <td>Día</td>
          </tr>
          <?php
            $sql="SELECT * from lugares";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_assoc($result)) { ?>
              <tr class="fila_pedido">
                <td><?php echo $mostrar['temporada'] ?></td>
                <td><?php echo $mostrar['ano'] ?></td>
                <td><?php echo $mostrar['zona'] ?></td>
                <td><?php echo $mostrar['calle'] ?></td>
                <td><?php echo $mostrar['dia'] ?></td>
                <?php echo "<td><a href='modped.php?id=".$mostrar['id']."'><button type='button' class='button'>Modificar</button></a></td>";
                echo "<td><a href='elimped.php?id=".$mostrar['id']."''><button type='button' class='button'>Eliminar</button></a></td>"; ?>
              </tr>
          <?php }?>
        </table>
      </div>
    </div>
    <?php include('pie.php') ?>
  </body>
</html>
