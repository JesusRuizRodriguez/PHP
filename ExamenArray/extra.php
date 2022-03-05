<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array=[1,2,3,4,5];
    mostrarArray($array);
    function mostrarArray($array){
        ?>
        <table border="1">
            <th>Tabla</th>
            <tr>
                <?php
                //recorre el array y muestra su clave y su valor en celdas distintas
                foreach($array as $clave => $valor){
                    ?> <td><?php echo $clave; ?></td>
                        <td><?php echo $valor; ?></td>
                    <?php
                }
            ?>        
            </tr>
        </table>
        
    <?php
    }
    
    function Primo($array){

        $aux = [];
        foreach($array as $clave => $valor){
         for($i=2;$i<$valor;$i++){
             
            if($valor%$i==0){
                //se añaden al final de un array auxiliar
                array_push($array,$aux);
                //se borran los valores de mi array inicial
                array_shift($array);
                //vuelvo añadir los valores pero al final del array inicial
                array_push($aux,$array);
             }


         }   
        }
           return $array; 
    }

    function arrayFinal($arrayfinal){
        //obtiene el valor del array modificado mediante la funcion y la muestra
        Primo($arrayFinal);
        ?>
        <table>
            <th>Tabla</th>
            <tr>
                <?php
                //muestra la clave y el valor divido en celdas diferentes
                foreach($array as $clave => $valor){
                    ?> <td><?php echo $clave; ?></td>
                        <td><?php echo $valor; ?></td>
                    <?php
                }
                ?>
            </tr>
        </table>


    <?php
    }
        ?>

    ?>
</body>
</html>