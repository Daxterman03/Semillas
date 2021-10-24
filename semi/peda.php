<?php
require 'conexion.php';
require '1a.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/pedido_adm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  </head>
  <body>
    <div class="cuerpoPedidos">
      <a href="./excel.php" class="download">Descargar Excel</a>
      <div class="pedidosUsuarios">
        <h1>Pedidos de los Usuarios</h1>
        <div>
          <table id="pdo_register">
            <thead>
              <tr>
                <th class="id_ped"></th>
                <th>Temporada</th>
                <th>Año</th>
                <th>Barrio</th>
                <th>Calle</th>
                <th>Día</th>
                <th>DNI</th>
                <th>Entregado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="js/dataTable.js"></script>
    <?php include('pie.php') ?>
  </body>
</html>
