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
    
    $valor = $_POST['valor'];
    
           ?>
            <p>Introduzca un numero</p>
            <form action='Formulario21.php' method='post'>
            <input type='number' name='numero'>
            <input type='hidden' name='valor' value="<?php echo $valor; ?>">
            <input type='submit' value='go'>    
        </form>
            <?php
         
        
        


        
        
        ?>

    
    </body>
</html>
