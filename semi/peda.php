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
                <th>Temporada</th>
                <th>Año</th>
                <th>Barrio</th>
                <th>Calle</th>
                <th>Día</th>
                <th>DNI</th>
                <th>Entregado</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
      $(document).ready( function () {
        $('#pdo_register').DataTable({
            language: {
                  "decimal": "",
                  "emptyTable": "No posee ningún dato",
                  "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                  "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                  "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ Entradas",
                  "loadingRecords": "Cargando...",
                  "processing": "Procesando...",
                  "search": "Buscar:",
                  "zeroRecords": "Sin resultados encontrados",
                  "paginate": {
                      "first": "Primero",
                      "last": "Ultimo",
                      "next": "Siguiente",
                      "previous": "Anterior"
                  }
            },
            "ajax":{
              "method":"POST",
              "url":"list_register.php"
            },
            "columns":[
              {"data":"temporada"},
              {"data":"ano"},
              {"data":"zona"},
              {"data":"calle"},
              {"data":"dia"},
              {"data":"dni"},
              {"data":"entregado"}
            ]
        });
      } );
    </script>
    <?php include('pie.php') ?>
  </body>
</html>
