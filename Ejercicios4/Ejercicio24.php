<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
   <?php 
   
   
   //imprime el numero de filas
   for($i=1;$i<=$numero;$i++){
    //imprime los espacios en blanco 
      for($l=($numero-$i);$l>0;$l--){
           echo "&nbsp; &nbsp";
       }
       //numeros ascendente hasta el centro
       for($k=1;$k<=$i;$k++){
           echo $k." ";
       }
       //numeros desde el centro decrecientes
       for($j=($i-1);$j>0;$j--){
           echo $j." ";
       }
   }
   
   ?>

</body>
</html>