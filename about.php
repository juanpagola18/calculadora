<?php

/**
  * Acceder a una sección about que 
  * indique los creadores de la calculadora. 
  * Si le indicamos con un parametro un desarrollador 
  *  en particular debe mostrar solo eso: 
  *  ejemplo: about.php?desarrollador=juan
**/
function showAbout($desarrollador = null){
    echo '
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora en backend</title>
        <base href="'.BASE_URL.'" target="_blank"/>
    </head>

    <body>';

      if (isset($desarrollador)) {
        echo "<h1>Acerca de $desarrollador</h1>";
        echo "<img src='img\dev.jpg'>";
      } else {
          echo "<h1>Este es about general: Calculadora de la materia Web 2 </h1>";
          echo "<img src='img\about.jpg'>";
      }
      echo '
      </body>

  </html>';
}
   
?>