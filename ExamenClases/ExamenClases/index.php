<!DOCTYPE html>
<?php
// TODO: Incluye las clases necesarias para el funcionamiento de la calculadora
//

include_once 'OperacionRacional.php';
include_once 'Racional.php';
include_once 'Operacion.php';
include_once 'OperacionReal.php';

$valor = filter_input(INPUT_POST, 'operacion', FILTER_SANITIZE_STRING);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora | POO</title>
    <link rel="stylesheet" type="text/css" href="calculadora.css" media="screen" />
</head>
<body>
<header>
    <h1>Calculadora Real</h1>
</header>
<main>
    <div id="left">
        <fieldset>
            <legend><h1>Reglas de uso de la calculadora</h1></legend>
            <p>La calculadora se usa escribiendo la operación.
                La operación será <strong>Operando_1 operación Operando_2.</strong>
                Cada operando puede ser número <strong>real o racional.</strong>
                Real p.e. <strong>5</strong> o <strong>5.12</strong> Racional p.e <strong>6/3</strong> o
                <stron>7/1</stron>
                Los operadores reales permitidos son <span style="color : red">+ - * /</span>
                Los operadores racionales permitidos son <span style="color : red">+ - * :</span>
                No se deben de dejar espacios en blanco entre operandos y operación
                Si un operando es real y el otro racional se considerará operación racional
                Ejemplo (Real)<strong>5.1+4</strong> (Racional)<strong>5/1:2</strong> (Error)<strong>5.2+5/1</strong>
                (Error)<strong>52214+</strong></p>
        </fieldset>
    </div>
    <div id="right">
        <fieldset class="display">
            <legend><h1>Establece la operación</h1></legend>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="operacion"><h2>Operación</h2></label>
                <input type="text" id="operacion" name="operacion"/>
                <input type="submit" value="Calcular" id="calcular"/><br/>
                <?php
                if (isset($_POST)){
                    // Compruebo si son validos los datos
                    if (Operacion::comprobarString($valor)){
                ?>
            </form>
        </fieldset>
        <fieldset>
            <legend><h1>Resultado</h1></legend>
            <?php
                // TODO: Según el tipo de operacion, instancia y utiliza las clases necesarias.
                if (Operacion::cogerTipo($valor) == "real"){
                    // 1. - Instanciamos la clase 
                    $r1 = new OperacionReal(3);
                    $r2 = new OperacionReal(6);
                    $r1 -> operacionReal(3,6,"+");
                    // 2. - Realizamos la operación
                    
                    // 3. - Imprimimos el resultado

                } else {
                    // 
                }
            ?>
        </fieldset>
        <?php
        } else {
            echo "</form>";
            echo "</fieldset>";
        ?>
        <fieldset>
            <legend><h1>Resultado</h1></legend>
            <?php
                echo $valor . '<br/>';
                echo "<br/>No es una operación válida";
                }
            ?>
        </fieldset>
    </div>
</main>
<?php
}
?>
</body>
</html>