<?php
require 'conexion.php';
require '1a.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
    td{
      text-align: center;
    }
    form{background-color: rgb(227, 150, 133);
      color: rgb(191, 27, 50);
    }
    body{
      background-color: rgb(2, 128, 79)
    }
    </style>
  </head>
  <body>
    <h1>Datos de Lugares</h1>
    <form action="zona.php" method="post">
      <table>
        <tr>
          <td>Temporada</td>
          <td>
            <label for="temporada"></label>
            <input type="text" name="temporada" required  />
          </td>
        </tr>
        <tr>
          <td>Año</td>
          <td>
            <label for="ano"></label>
            <input type="text" name="ano" required  />
          </td>
        </tr>
        <tr>
          <td>Zona</td>
          <td>
            <label for="zona"></label>
            <input type="text" name="zona" required  />
          </td>
        </tr>
        <tr>
          <td>Calle</td>
          <td>
            <label for="calle"></label>
            <input type="text" name="calle" required  />
          </td>
        </tr>
        <tr>
          <td>Día</td>
          <td>
            <label for="dia"></label>
            <input type="date" name="dia" required  />
          </td>
        </tr>
      </table>
      <input style="width: 100%;" type="submit" value="enviar">
    </form>
    <h1>Lugares para el retiro de las semillas</h1>
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
                echo "<td>  <a href='modped.php?id=".$mostrar['id']."'> <button type='button' class='btn btn-success'>modificar</button> </a> </td>";
                echo "<td> <a href='elimped.php?id=".$mostrar['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
                echo "</tr>";}
            ?>
        </table>
      </div>
    </div>
  </body>
</html>
