<?php 

ini_set('display_errors',1);
error_reporting(E_ALL);

$conexion = mysqli_connect("localhost","adminGestor","aa","gestor");

$userInfo = $conexion->query("SELECT * FROM Usuario");

$fetchUser =$userInfo->fetch_object();

echo "<select>";

while($fetchUser != null){
    echo "<option>";
    echo $fetchUser->correo;
    $fetchUser = $userInfo->fetch_object();
    echo "</option>";
}

echo "</select>";

