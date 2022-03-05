<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
<?php 

$numero = $_POST['numero'];
$numeroFinal;
$numeroReves;
$numeroReves2;
$numeroResultado;
if($numero > 0){

    //comprueba si el numero esta entre 10 y 100
    if($numero >= 10 && $numero <=100){

        //se recoje el ultimo digito del numero y lo comparo con el otro
        $numeroFinal = float ($numero/10);

        if ($numero == $numeroFinal){
            echo "el numero es capicuo";
        }else{
            echo "el numero no es capicuo";
        }
    //comprueba si el numero esta entre 100 y 1000    
    }else if($numero >= 100 && $numero <=1000){

        //se recoje el ultimo digito y se comprueba con el primero
        $numeroFinal = float($numero/10);
        $numero = $numero%10;

        if ($numero == $numeroFinal){
            echo "el numero es capicuo";
        }else{
            echo "el numero no es capicuo";
        }
    //comprueba si el numero esta entre 1000 y 10000    
    }else if($numero >= 1000 && $numero <=10000){
        //se recojen los 2 ultimos digitos
        $numeroFinal = float($numero/100);
        //se asigna la decena entre 10 a la variable $numeroReves
        $numeroReves = (float ($numeroFinal/10)/10) ;
        //se asigna la unidad por 10 a una variable
        $numeroReves2 = ($numeroFinal%10)*10;
        //la suma de las dos variables anteriores serán iguales a los dos primeros digitos, pudiendo compararlos
        $numeroResultado = $numeroReves + $numeroReves2;
        $numero = $numero%100;

        if ($numero == $numeroResultado){
            echo "el numero es capicuo";
        }else{
            echo "el numero no es capicuo";
        }

    //comprueba si el numero esta entre 10000 y 99999
    }else if($numero >=10000 && $numero <100000){
        //se recogen los 2 ultimos digitos
        $numeroFinal = float($numero/100);
        //se asigna la decena entre 10 a la variable $numeroReves
        $numeroReves = (float($numeroFinal/10))/10;
        //se asigna la unidad por 10 a la variable $numeroReves2
        $numeroReves2 = ($numeroFinal%10)*10;
        //se suman las dos variables, obteniendo los 2 primeros digitos pudiendo así compararlos
        $numeroResultado = $numeroReves + $numeroReves2;
        $numero = $numero%1000;

        if ($numero == $numeroResultado){
            echo "el numero es capicuo";
        }else{
            echo "el numero no es capicuo";
        }
    }
}else{
    ?>
    <p>Introduzca un numero positivo</p>
    <form action="Ejercicio1.php" method="post">
        <input type="submit" value="Continuar">
    </form>



<?php
}

?>    

</body>
</html>