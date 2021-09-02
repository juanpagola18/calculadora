<?php
    require_once("operaciones.php");

    function showOperacion($numero1, $numero2, $op){

        $cabecera_html = '
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Calculadora en backend</title>
        </head>

        <body>
            <h1>Calculadora</h1>
    ';

    $form_html = '
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
    ';

    $footer_html = '
        </body>
    </html>
    ';
    echo $cabecera_html;

    if(isset($numero1) && isset($numero2) && isset($op)){
        // Si se cumple esta condición, el usuario nos pasó la info
             
        switch ($op) {
            case 'sumar':
                $resultado = sumar($numero1, $numero2);
                $simbolo = "+";
                break;
            case 'dividir':
                $resultado = dividir($numero1, $numero2);
                $simbolo = "/";
                break;
            case 'restar':
                $resultado = restar($numero1, $numero2);
                $simbolo = "-";
                break;

            default:
                $resultado = "Operación invalida?";
                $simbolo = "??";
                break;
        }

        
        echo '
        <form method="GET" action="calcular.php">
            <input type="number" name="numero1" value="' . $numero1 . '">
            <select name="op">
                <option value="sumar">+</option>
                <option value="restar">-</option>
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
            </select>
            <input type="number" name="numero2" value="' . $numero2 . '">
            <input type="submit" value="=">
            <span>' . $resultado . '</span>
        </form>
    ';
        // echo "$numero1 $simbolo $numero2 = $resultado";
    }
    else{
        echo $form_html;
    }
    
    echo $footer_html;


    }
    
    

?>