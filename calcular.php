<?php
    require_once("operaciones.php");

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


    // isset($arr['clave']) > True: si clave está en el arreglo arr
    //                      > False: si clave no está en el arreglo arr
    // var_dump($_GET);  
    // echo '<br>isset($_GET[\'numero1\']): ';
    // var_dump(isset($_GET['numero1']));
    // echo '<br>isset($_GET[\'hola\']): ';
    // var_dump(isset($_GET['hola']));

    echo $cabecera_html;

    if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['op'])){
        // Si se cumple esta condición, el usuario nos pasó la info
        $numero1 =  intval($_GET['numero1']);
        $numero2 =  intval($_GET['numero2']);
        $op = $_GET['op'];
        
        switch ($op) {
            case 'sumar':
                $resultado = sumar($numero1, $numero2);
                $simbolo = "+";
                break;
            case 'dividir':
                $resultado = dividir($numero1, $numero2);
                $simbolo = "/";
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

?>