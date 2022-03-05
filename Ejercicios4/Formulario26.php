<!DOCTYPE html>
<html lang="es-Es">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
 <?php 
 
$numero=$_POST['numero'];
$digito =$_POST['digito'];
$numero2=$numero;
$posicion=1;
$contador=1;


while($numero2>0){

    $numero3 = $numero2%10;
    $numero2 = floor($numero2/10);
    $posicion++;
   
    
    
    if($numero3 == $digito){

       echo " <br> El numero esta en la posicion ".$posicion-1;
    }
        
}
?>   
</body>
</html>