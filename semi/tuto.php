<?php
require 'conexion.php';
require '1a.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>


     <style media="screen">

     td{
       text-align: center;

     }
     form{background-color: rgb(227, 150, 133);
       color: rgb(191, 27, 50);
       margin:0 auto;
       width: 28%;
         }

         body{
           background-color: rgb(2, 128, 79)
         }
     </style>





   </head>
   <body>
     <h1>agregar tutoriales</h1>
 <form action="agrt.php" method="post">
 <table>   <tr>
      <td>
          nombre
      </td>
      <td><label for="nombre"></label>
        <input type="text" name="nombre" required  />
      </td>
    </tr>
   <tr>
     <td>
         pag
     </td>
     <td><label for="pag"></label>
       <input type="text" name="pag" required  />
     </td>
   </tr>

   <tr>
     <td>
         id
     </td>
     <td><label for="id"></label>
       <input type="hidden" name="id" required  />
     </td>
   </tr>

 </table>
 <input style="width: 100%;" type="submit" value="enviar">

 </form>


</body>
</html>
