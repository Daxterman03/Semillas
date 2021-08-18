<?php
require '1a.php';
require 'conexion.php';
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
  
         }

         body{
           background-color: rgb(2, 128, 79)
         }
     </style>





   </head>
   <body>
     <h1>datos de admin</h1>
 <form action="dat2" method="post">
 <table>
   <tr>
     <td>
         nombre
     </td>
     <td><label for="nom"></label>
       <input type="text" name="nombre" required  />
     </td>
   </tr>

   <tr>
     <td>
         apellido
     </td>
     <td><label for="apell"></label>
       <input type="text" name="apellido" required  />
     </td>
   </tr>
 <tr>


   <td>
       dni
     </td>
     <td><label for="dni"></label>
       <input type="text" name="dni" required  />
<tr>


       <td>
           contra
         </td>
         <td><label for="contra"></label>
           <input type="text" name="contra" required  />
</tr>


 </table>
 <input style="width: 100%;" type="submit" value="enviar">

 </form>






 </html>
