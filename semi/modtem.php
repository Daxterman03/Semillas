<?php
  require 'conexion.php';
  require '1a.php';

    $id = $_GET['id'];

    $sql="SELECT * from fecha where id='$id'";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_assoc($result)) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      form{
        background-color: rgb(227, 150, 133);
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
    <h1>modificar datos de usuario</h1>
    <form action="modificar.php" method="post">
      <table>
        <tr>
          <td>Temporada</td>
          <td>
            <label for="temporada"></label>
            <input type="text" name="temporada"value="<?php echo $mostrar['temporada']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>Desde</td>
          <td>
            <label for="desde"></label>
            <input type="date" name="desde" value="<?php echo $mostrar['desde']; ?>"required  />
          </td>
        </tr>
        <tr>
          <td>Hasta</td>
          <td>
            <label for="asta"></label>
            <input type="date" name="asta"value="<?php echo $mostrar['asta']; ?>" required  />
          </td>
        </tr>
        <tr>
          <td>ID</td>
          <td>
            <label for="id"></label>
            <input type="text" name="id"value="<?php echo $mostrar['id']; ?>" required  />
          </td>
        </tr>
      </table>
      <input style="width: 300px;" type="submit" value="modificar">
    </form>
  </body>
</html>
<?php } ?>
