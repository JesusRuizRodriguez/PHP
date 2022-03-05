<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <!-- color negro o rojo segun la clase -->
    <style>
        .red{color:red;}
        .black{color:black;}
    </style>
</head>
<body>
    <?php 
    // recogida de datos por post
        $filas = $_POST['fila'];
        $columnas = $_POST['columna'];
    ?>
    <form action="#" method="POST">
        <label for="fila">Filas:</label>
        <input type="number" name="fila">
        
        <br>

        <label for="columna">Columnas: </label>
        <input type="number" name="columna">

        <br>

        <input type="submit" value="Enviar">
    </form>

    <br>
    <!-- tabla con borde -->
    <table border="1">

    <?php
    // bucle para generar la tabla
        for($i=1;$i<=$filas;$i++){
            echo "<tr>";
                for($x=1;$x<=$columnas;$x++){
                    // se guarda en una variable la suma del bucle
                    $suma = $x+$i;
                    // los multiplos de 3 se genera una clase red
                    if($suma%3 == 0){
                        echo "<td class='red'>";
                            echo $suma;
                        echo "</td>";
                    // los no multiplos de 3 se genera una clase black
                    }else{
                        echo "<td class='black'>";
                            echo $suma;
                        echo "</td>";
                    }
                }
            echo "</tr>";
        }
    ?>

    </table>
</body>
</html>