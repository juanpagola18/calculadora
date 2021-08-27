<?php
    /*
    Acceder a una sección about que 
     * indique los creadores de la calculadora. 
     * Si le indicamos con un parametro un desarrollador 
     *  en particular debe mostrar solo eso: 
     *  ejemplo: about.php?developer=juan

    */

    require_once("desarrolladores.php");

    if(isset($_GET['desarrollador'])){
        $desarrollador = $_GET['desarrollador'];
        
        if(isset($desarrolladores[$desarrollador])){
            $desc = $desarrolladores[$desarrollador];
        }
        else{
            $desc = "Un desarrollador que no está en nuestra base de datos.";
        }

        echo "<h1>Acerca de $desarrollador</h1>";
        echo "<p>$desc</p>";
    }
    else{
        echo "<h1>Acerca de los desarrolladores</h1>";

        echo "<ul>";
        foreach ($desarrolladores as  $clave => $valor) {
            echo "
                <li>
                    <a href='?desarrollador=$clave'>
                        $clave
                    </a>
                </li>
            ";
        }
        for ($i=0; $i < 10; $i++) { 
            # code...
        }

        echo "</ul>";
    }
