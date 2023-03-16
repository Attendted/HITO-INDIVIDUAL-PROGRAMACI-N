<?php

/* PÁGINA DE LOGIN, DONDE METEREMOS LOS DATOS Y TRABAJARÁ POR DETRAS PARA ESTABLECER LOS USUARIOS Y COMPROBAR QUE LO DATOS SON CORRECTOS
 */
if (!empty($_POST['usuario']) AND !empty($_POST['password']) ) {

    require_once("../modelo/conexion.php");
    require_once("../modelo/funcionesBDD.php");
    $nombre = $_POST['usuario'];
    $password = $_POST['password'];

     //Busqueda en la base de datos del usuario

    $recordset = getUsuario($link, $nombre, $password);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        header("Location:inicio.php");
    }else{
        header("Location:../login.html");

    }
  

} else{
    header("Location:../login.html");
}

?>