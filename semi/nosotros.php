<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/nosotros.css">
</head>
<body>

    <?php 
        session_start();
        if(!isset($_SESSION['dni'])){
            include('navbar.php');
        } else {
            include('navbaru.php');
        }
     ?>
    <div class="titulo">
        <h1>Nosotros</h1>
    </div>
    <div class="text">
        <div>
            <p>El programa Cultivar acerca a la población una oportunidad al recurso y también a un espacio donde se puedan potenciar habilidades, construir vínculos y generar un sustento familiar a través de las huertas.
            A partir de este programa, además de la entrega de semillas de temporada, se generan instancias de capacitación y encuentros para compartir experiencias, para fortalecer las oportunidades de desarrollo en cada economía familiar, uno de los objetivos de la gestión municipal.
            El objetivo de esta pagina web es llegar a la mayor cantidad de personas para que todos tengan el alcance de adquirir sus semillas y crear su propia huerta en casa.
            </p>
        </div>
    <div class="contenedortabla">
            <h1>Cada kit contiene:</h1>
        <table class="tabla">
            <tr>
                <th>Otoño-Invierno</th>
                <th>Primavera-Verano</th>
            </tr>

            <tr>
                <td>Acelga</td>
                <td>Acelga</td>
            </tr>

            <tr>
                <td>Arvejas</td>
                <td>Albahaca</td>
            </tr>
            
            <tr>
                <td>Cebolla</td>
                <td>Cebolla</td>
            </tr>

            <tr>
                <td>Lechuga</td>
                <td>Lechuga</td>
            </tr>

            <tr>
                <td>Remolacha</td>
                <td>Remolacha</td>
            </tr>

            <tr>
                <td>Perejil</td>
                <td>Tomate</td>
            </tr>

            <tr>
                <td>Zanahoria</td>
                <td>Zanahoria</td>
            </tr>

            <tr>
                <td>Caléndula</td>
                <td>Zapallo</td>
            </tr>

        </table>
    </div>

    <div class="contenedor">
        <div class="sectorfotos">
            <h1>Experiencias de la gente</h1>
            <div class = "img1">
                <img src="css/img1.jpeg" alt="">
            </div>
            <div class = "img4">
                <img src="css/img4.jpeg" alt="">
            </div>
            <div class = "img2">
                <img src="css/img2.jpeg" alt="">
            </div>
            <div class = "img3">
                <img src="css/imagen6.jpg" alt="">
            </div>
        </div>
        <div class="sectorvideos">
            <h1>Videos</h1>
            <video src="css/video1.mp4" controls ></video>
        </div>
    </div>
    <div class="contenedor2">

        <div class="maps">
            <h1> Nos encontramos en: </h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.629730906839!2d-61.96858528461642!3d-33.74438952004418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c864b19de411c3%3A0x4d8dd05f43761e95!2sMUNICIPALIDAD%20DE%20VENADO%20TUERTO!5e0!3m2!1ses-419!2sar!4v1631214188071!5m2!1ses-419!2sar" width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="logo">
            <img src="css/Logo_Cultivar.png" alt="">
        </div>
    </div>

    <?php include('pie.php') ?>

</body>
</html>