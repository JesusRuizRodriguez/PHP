<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <!-- imagenes con 100px de ancho y alto -->
    <style>
        img{width:100px;height:100px;}
    </style>
</head>
<body>
   <?php 
   //se recogen todas las imagenes de la ruta indicada, quitando la carpeta padre y la actual
        $imagen = array_diff(scandir("./imagenes"), array('..','.'));
        //se recoge la longitud del array de imagenes
        $longitud = count($imagen);
        //longitud del array entre 4 para las filas
        $filas = $longitud/4;
        //contador iniciado en 2 ya que el array empieza en 2
        $contador=2;
        //extensiones
        $jpg = 'jpg';
        $gif = 'gif';
        
        //se crea la tabla
    ?>
        <table>
    <?php
    //se crea un array con las extensiones de todos los archivos
    //+2 en la condicion ya que sino las 2 ultimas nunca las cogería
        for($j=2;$j<count($imagen)+2;$j++){
            $extension[$j] = pathinfo($imagen[$j]);
        }
        //creacion de las filas y celdas    
        for($x=0;$x<$filas;$x++){
            echo "<tr>";
                for($i=0;$i<4;$i++){
                    
                    echo "<td>";
                        //se hace la comprobacion de las extensiones y se muestra la imagen
                        if($extension[$contador]['extension']==$jpg || $extension[$contador]['extension']==$gif){
                            echo "<img src='./imagenes/".$imagen[$contador]."'>";
                        }
                        //se aumenta el contador
                        $contador++;
                    echo "</td>";
                }
            echo "</tr>";
        }
            
    ?>
        </table>
</body>
</html>