<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// Usuario y contraseña válidos
$usuarioCorrecto = "admin";
$claveCorrecta = "1234";

if($usuario == $usuarioCorrecto && $clave == $claveCorrecta){
    echo "<h2>Bienvenido $usuario</h2>";
} else {
    header("Location: error.html");
    exit();
}

?>
