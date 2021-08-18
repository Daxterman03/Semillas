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
    <title></title>

        <style media="screen">


        form{background-color: rgb(227, 150, 133);
          color: rgb(191, 27, 50);
          margin:0 auto;
          width: 300px;
            }

            body{
              background-color: rgb(2, 128, 79)
            }
        </style>

  </head>
  <body>
    <h1>lugar</h1>
<form action="modped1.php" method="post">
<table>

  <tr>
    <td>
        temporada
    </td>
    <td><label for="temporada"></label>

      <input type="text" name="temporada"value="<?php echo $mostrar['temporada']; ?>" required  />
    </td>
  </tr>

    <tr>
      <td>
          año
      </td>
      <td><label for="ano"></label>

      <input type="text" name="ano"value="<?php echo $mostrar['ano']; ?>" required  />
      </td>
    </tr>

  <tr>
    <td>
        zona
    </td>
    <td><label for="zona"></label>

      <input type="text" name="zona"value="<?php echo $mostrar['zona']; ?>" required  />
    </td>
  </tr>

  <tr>
    <td>
        calle
    </td>
    <td><label for="calle"></label>

      <input type="text" name="calle" value="<?php echo $mostrar['calle']; ?>"required  />
    </td>
  </tr>

  <tr>
    <td>
        dia
    </td>
    <td><label for="dia"></label>

      <input type="date" name="dia"value="<?php echo $mostrar['dia']; ?>" required  />
    </td>
  </tr>

  <tr>
    <td>
        id
    </td>
    <td><label for="id"></label>
      <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
    </td>
  </tr>



</tr>

</table>
<input style="width: 300px;" type="submit" value="modificar">

</form>



<?php } ?>
