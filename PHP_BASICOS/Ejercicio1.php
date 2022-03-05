<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php
//declaracion de variables y recogida de datos por POST 
    const IVA = 21;
    $cliente = $_POST['cliente'];
    $precio = $_POST['precio'];
?>
    <form action="#" method="POST">
        <label for="precio">Precio:</label>
        <input type="number" name="precio">
        
        <br>

        <label for="clienteEmpresa">cliente de la empresa: </label>
        <input type="radio" name="cliente" value="empresa">

        <br>

        <label for="clientePreferente">cliente preferente: </label>
        <input type="radio" name="cliente" value="preferente">

        <br>

       <input type="submit" value="Enviar">
    </form>
<?php 
//si es introduce un precio se hace la siguiente logica
    if(isset($precio)){
        //si el radio recibe empresa como value se aplica un descuento del 15 sino del 20
        if($cliente == "empresa"){
            $descuento = 15;
        }else{
            $descuento = 20;
        }
        //se hace el calculo del descuento 
        $porcentaje = ($precio*$descuento)/100;
            //si supera 25 será 25 ya que es el maximo
            if($porcentaje>25){
                $porcentaje=25;
            }
        //se aplica al precio el porcentaje y se le aplica el IVA
        $precio+=$porcentaje;
        //se guarda en una variable el iva aplicado al precio
        $precioIVA = ($precio*IVA)/100;
        $precioFinal = $precio + $precio*$precioIVA;

    //si existe precioFinal se mostrara una tabla con los datos 
    if(isset($precioFinal)){
        ?>
        <br>

        <table border="1">
            <tr>
                <td>Precio: </td>
                <td><?php echo $precio." €"; ?></td>
            </tr>

            <tr>
                <td>Descuento: </td>
                <td><?php echo $descuento."%";?></td>
            </tr>

            <tr>
                <td>Total descuentos:</td>
                <td><?php echo $porcentaje."%";?></td>
            </tr>
            <tr>
                <td>IVA: </td>
                <td><?php echo IVA."%";?></td>
            </tr>

            <tr>
                <td>Precio Final:</td>
                <td><?php echo $precioFinal." €";?></td>
            </tr>
        </table>
        
        <?php
    }}
?>
    
</body>
</html>