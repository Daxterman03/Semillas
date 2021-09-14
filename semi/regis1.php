
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

        <div class="popup"  id='popup'>
          <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>

            <div class="form_head">
              <h1>Ingrese sus datos</h1>
            </div>

            <div class="contenedor-inputs">

              <form class="form_order" action="dat1.php" method="post">
                <div class="dosColum">

                
                  <div class="miColumna">
                    <input class="entrada" type="text" name="nombre" placeholder="Nombre" required  />
                    <input class="entrada" type="text" name="apellido" placeholder="Apellido" required  />
                    <input class="entrada" type="mail" name="mail" placeholder="Mail" required  />
                    <input class="entrada" type="text" name="telefono" placeholder="Teléfono" required  />

                  </div>
          
                  <div class="miColumna">
                    <input class="entrada" type="text" name="dni" placeholder="DNI" required  />
                    <input class="entrada" type="text" name="direccion" placeholder="Dirección" required  />
                    <input class="entrada" type="text" name="inte" placeholder="Integrantes grupo familiar" required  />
                    <button class="button-modal" type="submit">Enviar</button>

                  </div>
                </div>
                
                
              </form>

            </div>

        </div>

      </div>

    </div>

    <script src="js/popups.js"></script>
    
  </body>
</html>
