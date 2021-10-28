// Funcion principal para crear el datatable
$(document).ready( function () {
  var table =  $('#pdo_register').DataTable({
                "ajax":{
                  "method":"POST",
                  "url":"list_register.php"
                },
                "columns":[
                  {"data":"id"},
                  {"data":"temporada"},
                  {"data":"ano"},
                  {"data":"zona"},
                  {"data":"calle"},
                  {"data":"dia"},
                  {"data":"dni"},
                  {"data":"entregado"},
                  {"defaultContent":"<button class='button_small-check' id='check'><i class='fas fa-check'></i></button><button class='button_small-del' id='delete'><a href='#'><i class='fas fa-minus'></i></a></button>"}
                ],
                "language": idioma_español
              });
  //  Función para traer el dato ID de la tabla
  $('#pdo_register tbody').on('click', 'button#check', function(){
    var data = table.row($(this).parents('tr')).data();
    console.log(data);
  });    
} );
var idioma_español = {
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
};