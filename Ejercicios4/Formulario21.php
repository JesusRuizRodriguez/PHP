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

        $numero = $_POST['numero'];
        $sumanum += $_POST['valor'];
        $media += $sumanum;
        if($numero >0){
            ?>

            <form action="Ejercicio21.php" method="post">
            <input type="hidden" name="valor" value="<?php echo $numero;?>">
            <input type="submit" value="Continuar">
            
            </form>
            <?php 
        }else{

                echo $media;

        }


       ?>
    </body>
</html>
