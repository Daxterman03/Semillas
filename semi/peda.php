<?php
require 'conexion.php';
require '1a.php';
 ?>
 <html>
  <head>
  </head>
  <body>
    <h1>Pedidos</h1>
    <div>
      <div>
      <br>
        <table>
          <tr>
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

                echo "<tr>";
                  echo "<td>"; echo $mostrar['temporada']; echo "</td>";
                  echo "<td>"; echo $mostrar['ano']; echo "</td>";
                  echo "<td>"; echo $mostrar['zona']; echo "</td>";
                  echo "<td>"; echo $mostrar['calle']; echo "</td>";
                  echo "<td>"; echo $mostrar['dia']; echo "</td>";
                  echo "<td>"; echo $mostrar['dni']; echo "</td>";
                  echo "<td>"; echo $mostrar['entregado']; echo "</td>";
                  echo "<td>  <a href='pedias.php?id=".$mostrar['id']."'> <button type='button'>si</button> </a> </td>";
                  echo "<td> <a href='pedielim.php?id=".$mostrar['id']."''><button type='button'>no</button></a> </td>";
                echo "</tr>";}?>
        </table>
      </div>
    </div>
  </body>
</html>