<?php

require_once("Usuario.php");
session_start();
Usuario::cerrarSesion();

header("Location: ../../index.php");

