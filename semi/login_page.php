
<?php require 'conexion.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/ventana.css">
    <script src="https://kit.fontawesome.com/5ad54e1f93.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php include('index.php')?>
    
    <div class="overlay" id='overlay'>

      <div class="cuerpo_forms">

        <div class="popup" id='popup'>
          <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
          <div class="form_head">
            <h1>Inicio de Sesión</h1>
          </div>

          <div class="contenedor-inputs">

            <form class="form_order" action="login.php" method="post">
              <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
              <input class="entrada" type="text" name="dni" placeholder="DNI" required  />
             
              <button class="button-modal" type="submit">Enviar</button>
            </form>

          </div>

        </div>

      </div>

    </div>
     
    <script src="js/popups.js"></script>


  </body>
</html>