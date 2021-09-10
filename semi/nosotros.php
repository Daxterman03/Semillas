<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/nosotros.css">
</head>
<body>

    <?php 
        session_start();
        $dni = $_SESSION['dni'];
        if(!isset($dni)){
            include('navbar.php');
        } else {
            include('navbaru.php');
        }
     ?>

    <div class="text">
        <div>
            <p>El programa Cultivar acerca a la población una oportunidad de acceso no sólo al recurso sino también al espacio donde se puedan potenciar habilidades, construir vínculos y generar un sustento familiar a través de las huertas.
            A partir de este programa, además de la entrega de semillas de temporada, se generan distintas instancias de capacitación y encuentros para compartir experiencias, para fortalecer las oportunidades de desarrollo en cada economía familiar, uno de los objetivos de la gestión municipal.
            El objetivo de esta pagina web es llegar a la mayor cantidad de personas para que todos tengan el alcance de adquirir sus semillas y crear su propia huerta en casa.
            </p>
        </div>
    </div>

    <div class ="imagenes_programa">
        <div class = "imagen1">
        <img src="css/imagenc.jpeg" alt="Imagen Cultivar">
        </div>
        <div class= "imagen2">
        <img src="css/imagen2 cultivar.jpeg" alt="Imagen Cultivar2">
        </div>
    </div>

    <div class="infoprograma">
        <p>
            Con la organización de la Coordinación de Emprendedurismo y Economía Social, dependiente de la Secretaría de Desarrollo Productivo y Planeamiento Urbano, el Gobierno de Venado Tuerto inscribe para la entrega de semillas de la temporada primavera-verano 2021, en el marco del programa Cultivar, una iniciativa del municipio que estimula la producción huertera.
        </p>
        <p>
            Se trata de semillas adquiridas con recursos propios a la cooperativa de productores Fecoagro de San Juan. El kit que se entregará sin cargo a partir de septiembre comprende ocho especies: acelga, albahaca, cebolla, lechuga, remolacha, tomate, zanahoria y zapallo.  
        </p>
        <p>
            <b>“Desde el programa Cultivar se dio como finalizado en el mes de abril la entrega de semillas OTOÑO-INVIERNO correspondiente al año 2021. A partir de este momento se estan tomando nuevas inscripciones al programa que hoy ya supera los dos mil inscriptos. Ya en el mes de septiembre se estarán entregando las semillas del programa correspondientes a la temporada PRIMAVERA-VERANO 2021”</b>  
        </p>

    </div>
    <h1> Nos encontramos en: </h1>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6635.260894587746!2d-61.966618!3d-33.744371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c864b19de411c3%3A0x4d8dd05f43761e95!2sMUNICIPALIDAD%20DE%20VENADO%20TUERTO!5e0!3m2!1ses-419!2sus!4v1630562056759!5m2!1ses-419!2sus"></iframe>
        </div>
    <?php include('pie.php') ?>


</body>
</html>