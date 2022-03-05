<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
</head>
<body>

<?php
if(!isset ($medianum)){
    ?>
    <form action="Formulario10.php" method="post">
    <input type="number" name="numero">
    <input type="submit" value="Enviar">

</form>
<?php
    $medianum= $_POST['numero'];
    

   


}else{
?>
    <form action="Formulario10.php" method="post">
        <input type="number" name="numero">
        <input type="hidden" value="<?php echo $medianum;?>">
        <input type="submit" value="Enviar">
        

    </form>
<?php
}
?>
  
</body>
</html>