<?php

function showHome() {
    echo '
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora en backend</title>
        <base href="'.BASE_URL.'" target="_blank"/>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <nav>
            <h3 class="title"><a href="home" target="_parent">CALCULADORA</a></h3>
            <ul>
                <li><a href="pi" target="_parent">Pi</a></li>
                <li><a href="about" target="_parent">About</a></li>
                <li><a href="about/javito" target="_parent">About DEV</a></li>
            </ul>
        </nav>

        <!-- 
            VER CON FRANCO
            SIMULAR EL LLAMADO A: 
            - http://localhost/calculadora/restar/10/2
            - http://localhost/calculadora/sumar/10/2
        -->
            
        <form method="GET" action="calcular.php">
            <input type="number" name="numero1">
            <select name="op">
                <option value="sumar">+</option>
                <option value="restar">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>
            <input type="number" name="numero2">
            <input type="submit" value="=">
        </form>

    </body>
    </html>';
}

?>