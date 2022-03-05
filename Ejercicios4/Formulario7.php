<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php 
    $num=$_POST['num'];
    $comb=1234;
    $oportunidades=$_POST['oportunidades'];

    if(!isset($oportunidades)){
        $oportunidades = 4;
    }

    if(!isset($num)){
        
        echo "No has introducido un numero";
        echo "<form action='Ejercicio7.php' method='post'>
            <input type ='submit' value='go'>
            </form>";
        
    }else{
        

            if($oportunidades>0){
                if($num == $comb){
                    echo "has acertado";
                }else{
                    $oportunidades --;
                    echo "no has acertado";
                    echo"<form action='Ejercicio7.php' method='post'>
                    <input type='hidden' name='oportunidades' value="'$oportunidades'">
                    <input type ='submit' value='go'>
                     </form>";
                }
            }else{
                echo "te has quedado sin oportunidades";
            }

        }
        

    

?>    
</body>
</html>