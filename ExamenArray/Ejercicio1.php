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

    //se obtiene el array desserializado en el caso de que se recoja
    $primo = unserialize($_POST['primo']);
    $numero =$_POST['numero'];
    $contador =$_POST['contador'];

    //cuando el numero no este vacio se asignara esos mismos numeros como valores del array
    if(!empty($numero)){
    $arrayprimo=[$numero];
    }
    //se asiggna el array serializado a una variable 
    $primo = serialize($arrayprimo);

    
    
    if($contador <10){
        ++$contador;
    
        ?>
            <form action="#" method="post">
            <input type="text" name="numero" autofocus required>
            <input type="hidden" name="primo" value="<?php echo $primo;?>">
            <input type="hidden" name="contador" value="<?php echo $contador;?>">
            <input type="submit" value="Ok">
            </form>
        <?php 
    }else{
        //en caso de que se termine de introducir numeros se ejecutaran las funciones;
        mostrarArray($arrayprimo);
        Primo($arrayprimo);
        arrayFinal($arrayprimo);
    }

    function mostrarArray($array){
        ?>
        <table>
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


    
    
</body>
</html>