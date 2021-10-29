$(document).ready(function(){
    var table =  $('#pdoVigentes').DataTable({
        "ajax":{
          "method":"POST",
          "url":"listPdoVigente.php"
        },
        "columns":[
          {"data":"id"},
          {"data":"temporada"},
          {"data":"ano"},
          {"data":"zona"},
          {"data":"calle"},
          {"data":"dia"},
          {"defaultContent":"<button class='button_small-del' id='deletePdo'>Eliminar</button>"}
        ],
        "language": idioma_español
      });
    $('#pdoVigentes tbody').on('click', 'button#deletePdo', function(){
    let data = table.row($(this).parents('tr')).data();
    let parametros = {
        id: data.id
    }
    $.ajax({
        type:"post",
        url:"/php/semillas/semi/elimped.php",
        data: parametros,
        success: function(data){
        table.ajax.reload();
        }
    })
    })
})
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