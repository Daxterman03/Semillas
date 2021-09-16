<?php
require 'conexion.php';
require '1a.php';
 ?>
 <html>
  <head>
    <link rel="stylesheet" href="css/pedido_adm.css">
  </head>
  <body>
    <div class="cuerpoPedidos">
      <div class="pedidosUsuarios">
        <h1>Pedidos de los Usuarios</h1>
        <table>
          <tr class="primera_fila">
            <td>Temporada</td>
            <td>Año</td>
            <td>Zona</td>
            <td>Calle</td>
            <td>Día</td>
            <td>DNI</td>
            <td>Entregado</td>
          </tr>
            <?php
              $sql="SELECT * from pdo";
              $result=mysqli_query($conexion,$sql);
              while($mostrar=mysqli_fetch_assoc($result)) {
            ?>
                <tr class="fila_pedido">
                  <td><?php echo $mostrar['temporada']?></td>
                  <td><?php echo $mostrar['ano']?></td>
                  <td><?php echo $mostrar['zona']?></td>
                  <td><?php echo $mostrar['calle']?></td>
                  <td><?php echo $mostrar['dia']?></td>
                  <td><?php echo $mostrar['dni']?></td>
                  <td><?php echo $mostrar['entregado']?></td>
                  <?php
                  echo "<td>  <a href='pedias.php?id=".$mostrar['id']."'>Entregado</td>";
                  echo "<td> <a href='pedielim.php?id=".$mostrar['id']."''>Eliminar</td>";
                  ?>
                </tr>
            <?php }?>
        </table>
      </div>
    </div>
    <?php include('pie.php') ?>
  </body>
</html>