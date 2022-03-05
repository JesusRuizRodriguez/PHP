<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero=$_POST['numero'];
        $resultado;
        if($numero > 0){
           
            for($i=$numero;$i<=$numero+100;$i++){
                
                 $resultado +=$i;
                 
            }
                echo "El resultado de sumar el numero introducido con sus 100 siguientes es = ".$resultado;
            
            
        }else{
            echo"Introduzca un numero positivo";
        }
        ?>
    </body>
</html>
