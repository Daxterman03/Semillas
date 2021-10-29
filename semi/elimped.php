<?php
require 'conexion.php';
require '1a.php';

    $id = $_POST['id'];

    mysqli_query($conexion, "DELETE from lugares where id='$id'")
    or die ("error al eliminar");
        mysqli_close($conexion);
        echo '<script type="text/javascript">
        alert("Pedido eliminado correctamente");
        window.location.href="lfet.php";
        </script>';
    ?>
