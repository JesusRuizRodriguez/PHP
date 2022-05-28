<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluquería Ali</title>
    <link rel="stylesheet" href="../../css/estiloLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ralewaydisplay=swap" rel="stylesheet"> 
</head>
<body>

    <div class="center"> 
        <div class="login">
            
            <h2>Login</h2>

            <form action="#" method="post">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo">

                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">

                <div>
                    <input type="checkbox" name="recordar">
                    <label for="recordar">Recordar Contraseña</label>
                </div>

                <div class="submitLogin">
                    <input type="submit" name="submit" value="Inicio de Sesión">
                </div>
                
                <a href="./registro.php">¿No tienes cuenta? Regístrate</a>
            </form>

            <?php 
            
            require_once("Usuario.php");        
            require_once("./conexion.inc.php");
            $conexion = Conexion::openConexion();
            
            if(isset($_POST['submit'])){
                if(isset($_POST['correo']) && isset($_POST['pass'])){
                    //creacion de variables
                    $correo = $_POST['correo'];
                    $pass = $_POST['pass'];
                                
                    Usuario::login($conexion,$correo,$pass);                    
                }
            }
            ?>
            
        </div>
    </div>
</body>
</html>