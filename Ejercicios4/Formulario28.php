<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php 
    
    $numero=$_POST['numero'];
    
    
    for($i=1;$i<=$numero;$i++){

      $contador[$i]=$i;
      $resultado = array_product($contador);
        
    }

    echo "El factorial de ".$numero." es = ".$resultado;
    
    ?>
</body>
</html>