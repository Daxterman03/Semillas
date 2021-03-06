<?php 
require 'conexion.php';
require 'peda.php';
$sql = 'SELECT * from lugares';
$query = mysqli_query($conexion, $sql);
$fetch = mysqli_fetch_assoc($query);
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/ventana.css">
    </head>
    <body>
        <section class="overlay" id="overlay">
            <div class="cuerpo_forms_regis">
                <div class="popup" id="popup">
                    <a href="peda.php" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
                    <div class="form_head">
                        <h1>Ingrese los datos correspondientes</h1>
                    </div>
                    <div class="contenedor-inputs">
                        <form class="form_order" action="manual_order.php" method="POST">
                            <input type="text" value="<?php echo $fetch['temporada']?>" name="temporada">
                            <input type="text" value="<?php echo $fetch['ano']?>" name="año">
                            <input type="date" value="<?php echo $fetch['dia']?>" name="dia">
                            <input type="text" placeholder="Barrio" name="barrio">
                            <input type="text" placeholder="Calle" name="calle">
                            <input type="text" placeholder="Nombre" name="nombre" required>
                            <input type="text" placeholder="DNI" name="dni" required>
                            <input class="button-modal" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/popups.js"></script>
    </body>
</html>