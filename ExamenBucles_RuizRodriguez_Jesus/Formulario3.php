<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 
    
    $num = $_POST['numero']; 
    
        for($i=0; $i<=$num;$i++){
            
            //la variable empieza en 0
            $fibonacci = $i;
            //una variable que vale la iteracion del bucle + 1 
             $fibonacci2 = $i +1;
             $suma = $fibonacci + $fibonacci2;
             $fibonacci = $suma;

             
             echo $suma+$fibonacci2." ";
            // en el caso de que se haga el bucle una vez, le valor de fibonacci será el de la suma
            if($fibonacci == $suma){
                $fibonacci == $suma;
            }
            
            
             

        }

    
    
    
    
    
    ?>


    
</body>
</html>