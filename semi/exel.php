<?php
require 'conexion.php';
header("Content-type: application/xls");
header("Conten-Disposition: attachment: filename=archivo.xls");

 ?>
 <table>
   <tr class="primera_fila">
     <td>Temporada</td>
     <td>Año</td>
     <td>Barrio</td>
     <td>Calle</td>
     <td>Día</td>
     <td>DNI</td>
     <td>Entregado</td>
     <td>pedido</td>
     <td>id</td>
   </tr>
     <?php
       $sql="SELECT * from pdo";
       $result=mysqli_query($conexion,$sql);
       while($mostrar=mysqli_fetch_assoc($result))  {

     ?>
       <tr class="fila_pedido">
         <td><?php echo $mostrar['temporada']?></td>
         <td><?php echo $mostrar['ano']?></td>
         <td><?php echo $mostrar['zona']?></td>
         <td><?php echo $mostrar['calle']?></td>
         <td><?php echo $mostrar['dia']?></td>
         <td><?php echo $mostrar['dni']?></td>
         <td><?php echo $mostrar['entregado']?></td>
         <td><?php echo $mostrar['entregado']?></td>
         <td><?php echo $mostrar['id']?></td>


       </tr>
     <?php }?>
