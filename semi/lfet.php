<?php
require 'conexion.php';
require '1a.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/pedido_adm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  </head>
  <body>
    <div class="cuerpo_ped_adm">
      <div class="nuevo_pedido">
        <h1>Ingrese Nuevo Pedido</h1>
        <form class="inputs_adm" action="zona.php" method="post">
          <input type="text" name="temporada" placeholder="Temporada" required  />
          <input type="text" name="ano" placeholder="Año" required  />
          <input type="date" name="dia" required  />
          <input type="text" name="zona" placeholder="Barrio" required  />
          <input type="text" name="calle" placeholder="Calle" required  />
          <input class="button" type="submit" value="Enviar">
        </form>
      </div>
      <div class="pedidos_vigentes">
        <h1>Pedidos Vigentes</h1>
        <table id="pdoVigentes">
          <thead>
            <tr>
              <th class="id_ped">id</th>
              <th>Temporada</th>
              <th>Año</th>
              <th>Barrio</th>
              <th>Calle</th>
              <th>Día</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
    <script src="js/tablePdoVigentes.js"></script>
    <?php include('pie.php') ?>
  </body>
</html>
