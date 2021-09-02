<?php

function showHome(){
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

<body>
    <nav>
        <ul>
            <li>
                <a href="pi">Pi</a>
            </li>
            <li>
                <a href="about">About</a>
            </li>
            <li>
                <a href="about/Javito">About DEV</a>
            </li>
        </ul>
    </nav>

    <!-- 
        VER CON FRANCO
        SIMULAR EL LLAMADO A: 
        - http://localhost/calculadora/restar/10/2
        - http://localhost/calculadora/sumar/10/2
        
        <h1>Calculadora</h1>
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
    </form> -->

    
</body>

</html>';
}


?>