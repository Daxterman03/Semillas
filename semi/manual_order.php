<?php
require 'conexion.php';
$temporada = $_POST['temporada'];
$ano = $_POST['año'];
$dia = $_POST['dia'];
$barrio = $_POST['barrio'];
$calle = $_POST['calle'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];

$sql = "INSERT INTO pdo (temporada, ano, zona, calle, dia, dni, entregado)
                    values('$temporada', '$ano', '$barrio', '$calle', '$dia', '$dni', 'Si')";
$verify_pdo = mysqli_query($conexion, "SELECT * FROM pdo WHERE dni = '$dni' and dia = '$dia'");

$sql_new = "INSERT into usu1 (nombre, apellido, mail, telefono, dni, direccion, inte)
                        values ('$nombre', ' ', ' ', ' ', '$dni', ' ', ' ')";
$verify_user = mysqli_query($conexion, "SELECT * FROM usu1 Where dni = '$dni'");

if (mysqli_num_rows($verify_user) == 0 and mysqli_num_rows($verify_pdo) == 0){
    $accion_insert = mysqli_query($conexion, $sql);
    $accion_insert_new = mysqli_query($conexion, $sql_new);
    echo '
    <script type="text/javascript">
    alert("Pedido Registrado y Usuario Registrado");
    window.location.href="peda.php";
    </script>
    ';
}elseif (mysqli_num_rows($verify_pdo) == 0 and mysqli_num_rows($verify_user) != 0){
    $accion_insert = mysqli_query($conexion, $sql);
    echo '
    <script type="text/javascript">
    alert("Pedido Registrado y el usuario ya estaba registrado");
    window.location.href="peda.php";
    </script>
    ';
}else{
    echo '
    <script type="text/javascript">
    alert("El pedido y el usuario ya estaban registrados");
    window.location.href="peda.php";
    </script>
    ';
}
