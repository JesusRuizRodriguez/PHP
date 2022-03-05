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
        $base = $_POST['base'];
        $exp = $_POST['exponente'];
        
         
        
        for($i=0;$i<=$exp;$i++){
             
            if($i < $exp){
               echo $base."^".$i.", ";
              
            }else{
                echo $base."^".$i.". ";
                
            }
            
        }
        ?>
    </body>
</html>
