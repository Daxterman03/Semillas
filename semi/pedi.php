<?php
require 'conexion.php';
require '1u.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style media="screen">
      br, td, tr{
        color:rgb(27, 143, 109);
        margin-left:35px;
        margin-right:35px;
        padding-left:35px;
        padding-right: 35px;
       }
    </style>
  </head>
  <body style="background-color:rgb(0, 0, 0)">
    <h1>pedidos de semillas</h1>
    <div class="row">
      <div class="col-sm-12">
        <br>
        <table class=" table-success table-striped" style="text-align: center">
          <tr>
            <td>Temporada</td>
              <td>Año</td>
              <td>Zona</td>
              <td>Calle</td>
              <td>Día</td>
              <td>ID</td>
          </tr>
          <?php
            $sql="SELECT * from lugares";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_assoc($result)) {
              echo "<tr>";
                echo "<td>"; echo $mostrar['temporada']; echo "</td>";
                echo "<td>"; echo $mostrar['ano']; echo "</td>";
                echo "<td>"; echo $mostrar['zona']; echo "</td>";
                echo "<td>"; echo $mostrar['calle']; echo "</td>";
                echo "<td>"; echo $mostrar['dia']; echo "</td>";
                echo "<td>"; echo $mostrar['id']; echo "</td>";
                echo "<td>  <a href='ped1.php?id=".$mostrar['id']."'> <button type='button' class='btn btn-success'>pedir</button> </a> </td>";
              echo "</tr>";}?>
        </table>
      </div>
    </div>
  </body>
</html>

