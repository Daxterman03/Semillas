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



    </style>
h1{
  color: rgb(107, 0, 87);
}
  </head>
  <link rel="stylesheet" href="css/pedi.css">

  <body style="background-color:rgb(0, 0, 0)">
    <h1>Pedidos de Semillas</h1>
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
                echo "<td>  <a href='ped1.php?id=".$mostrar['id']."'> <button type='button' class='btn btn-success'>pedir</button> </a> </td>";
              echo "</tr>";}?>
        </table>
      </div>
    </div>
  </body>
      <?php include('pie.php')?>
</html>
