<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 
    
    $numero=$_POST['numero'];
    $contador = 0;
    
    
    for($i=0;$i<=$numero;$i++){
        
       $resultado = $numero % $i;
        //se comprueba que la variable contadora sea igual a 1 o al numero introducido
       
        if($i == 1 || $i == $numero){
        
        //se comprueba el modulo para saber si es divisible entre 1 o el numero introducido
        
        if($resultado == 0){
               echo "El numero es primo";
           }
       }else{
        if($resultado == 0){
            echo "El numero no es primo";
        }
       }

       

    }




   
    
    
    
    
    
    ?>
</body>
</html>