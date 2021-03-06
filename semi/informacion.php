<?php require('conexion.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/informacion.css">
</head>
<body>
    <!-- Inclusión de barra de navegación por php -->
    <?php 
        session_start();
        if(!isset($_SESSION['dni'])){
            include('navbar.php');
        } else {
            include('navbaru.php');
        }
    ?>
    <main class="main">
        <div class="descripcion">
            <h1>Tu huerta</h1>
            <p>
            "Llevar adelante una huerta brinda un momento que sirve de punto de encuentro con los más chicos, con amigos y con la familia. Es especialmente bueno para los niños, ya que el ver crecer una planta desarrollan la paciencia, la observación, la imaginación y la sensibilidad. Además, trabajar con la tierra genera anticuerpos y estar al sol favorece la producción de vitamina D. Trabajar en una huerta familiar significa tiempo de calidad compartido entre padres e hijos, donde se generan charlas, juegos y aprendizajes"
            </p>
        </div>
        <div class="contenedores">
            <div class="pasoshuerta">
                <h1> Pasos a seguir para tu huerta</h1>
                <ul>
                    <li>Escoger un buen lugar.</li>
                        <p>Una terraza, ventana o balcón pueden convertirse en un lugar perfecto para cultivar. Lo aconsejable es que el huerto este situado en una zona iluminada y protegido ante corrientes de aire.</p>
                    <li>¿Qué puedes plantar?</li>
                        <p>
                            Si eres principiante, lo mejor será que optes por las verduras más fáciles de cultivar, ya que estas darán mejores resultados, debido a que no suelen ser afectados por enfermedades o plagas. <br>
                            Además, suelen tener un ciclo corto y se pueden cultivar durante casi todo el año. Algunos de ellos son: Acelgas, lechugas y cebollas.
                        </p>
                    <li>Buscar buenos recipientes.</li>
                        <p>Según las dimensiones que tenga tu balcón, terraza o patio tendrás que elegir un tipo de maceta o contenedor para tu huerto. En los recipientes de 7 a 15 cm de profundidad se puede plantar (Zanahorias, tomates, albahaca), Ya que sus raíces no son de gran tamaño.</p>
                    <li>Comenzar con la siembra.</li>
                        <p>Hay dos formas que te pueden ser de utilidad para la preparación de tu huerto:
                            <br>
                            a)Sembrar directamente en el huerto.     
                            <br>
                            b)Sembrar en contenedores pequeños para después trasplantarlos al huerto, lo que se conoce como plantel.    
                        </p>
                    <li>Realiza el trasplante.</li>
                        <p>Cuando vayas a realizar el transplante de los cultivos de tu huerto urbano, se debe tener presente el cuidado de sus raíces. Se aconceja que le hagas un agujero de gran tamaño y presiones al sustrato, para poder comenzar a regarlo.                       
                        </p>
                    <li>Escoge el sustrato.</li>
                        <p>El éxito de tu huerto dependerá del sustrato que utilices. El sustrato mas recomendable es el compost. Es 100% orgánico (contiene mezcla de restos forestales y estiercol).</p>
                    <li>Mantenimiento de tu huerto.</li>
                        <p>Las plantas se alimentan de los nutrientes minerales que hay en el sustrato. Aunque al principio no será necesario añadir algún abono, se recomienda abonar dos veces al año.
                        Para regar con precisión se recomienda el sistema de riego por goteo.  
                        </p>            
                </ul>
            </div>
            <div class="tutoriales">
                <h1>¿Desea saber más?</h1>
                <iframe style: width="100%" height="350" text-align: center; src="https://www.youtube.com/embed/kx-tGf3CcGg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img src="css/imagenprogcult.jpg" alt="Programa Cultivar">
            </div>
        </div>
    </main>
    <!-- Inclusión de pié de página-->
    <?php include('pie.php') ?>
</body>
</html>