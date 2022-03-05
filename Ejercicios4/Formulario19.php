<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
<?php 

$altura=$_POST['altura'];
$bloque=$_POST['bloque'];
//segun el boton que se pulse se muestra una piramide diferente
if($bloque == 'hastag'){

    for($i=1;$i<=$altura;$i++){
        //si altura vale x, se imprimiran x-1 espacios
        for($j=1;$j <=$altura - $i; $j++){
            echo "&nbsp;";
        }
        //x empieza valiendo 1 haciendo que la primera condicion 1<2*1-1, y se impriman un * de mas en cada iteracion 
        for($x=1;$x<=2*$i-1 ;$x++){
            echo "*";
        }
        echo "<br>";
    }

}else if($bloque == 'punto'){
    
    for($i=1;$i<=$altura;$i++){
    
        for($j=1;$j <=$altura - $i; $j++){
            echo "&nbsp;";
        }
        
        for($x=1;$x<=2*$i-1 ;$x++){
            echo ".";
        }
        echo "<br>";
    }
}else if($bloque == 'O'){

    for($i=1;$i<=$altura;$i++){
    
        for($j=1;$j <=$altura - $i; $j++){
            echo "&nbsp;";
        }
        
        for($x=1;$x<=2*$i-1 ;$x++){
            echo "O";
        }
        echo "<br>";
    }

}else if($bloque == 'H'){

    for($i=1;$i<=$altura;$i++){
    
        for($j=1;$j <=$altura - $i; $j++){
            echo "&nbsp;";
        }
        
        for($x=1;$x<=2*$i-1 ;$x++){
            echo "H";
        }
        echo "<br>";
    }

}else{
    for($i=1;$i<=$altura;$i++){
    
        for($j=1;$j <=$altura - $i; $j++){
            echo "&nbsp;";
        }
        
        for($x=1;$x<=2*$i-1 ;$x++){
            echo "M";
        }
        echo "<br>";
    }
}




?>    

</body>
</html>


