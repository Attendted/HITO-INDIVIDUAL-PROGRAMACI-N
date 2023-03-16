<?php 

/* CONEXIÓN CON LA BASE DE DATOS Y COOKIE DE RESPALDO */

    $host = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $base_de_datos = "HITOBDD";
    $link = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
    if ($link->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
setcookie('ip', $_SERVER['REMOTE_ADDR']);
$oockieip = $_COOKIE['ip']
?>
