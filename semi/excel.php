<?php
require 'conexion.php';
header("Pragma: public");
header("Expires: 0");
$filename = "ListaPedidos_ProgramaCultivar.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>
<meta charset="utf-8">
<table>
  <tr class="primera_fila">
    <td>Temporada</td>
    <td>Año</td>
    <td>Barrio</td>
    <td>Calle</td>
    <td>Día</td>
    <td>DNI</td>
    <td>Entregado</td>
    <td>Pedido</td>
  </tr>
  <?php
  $sql = "SELECT * from pdo";
  $result = mysqli_query($conexion, $sql);
  while ($mostrar = mysqli_fetch_assoc($result)) {

  ?>
    <tr class="fila_pedido">
      <td><?php echo $mostrar['temporada'] ?></td>
      <td><?php echo $mostrar['ano'] ?></td>
      <td><?php echo $mostrar['zona'] ?></td>
      <td><?php echo $mostrar['calle'] ?></td>
      <td><?php echo $mostrar['dia'] ?></td>
      <td><?php echo $mostrar['dni'] ?></td>
      <td><?php echo $mostrar['entregado'] ?></td>
    </tr>
  <?php } ?>