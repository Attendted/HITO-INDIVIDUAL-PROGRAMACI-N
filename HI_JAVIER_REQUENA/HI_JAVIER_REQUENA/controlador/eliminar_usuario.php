<?php

$id = $_GET['id'];

include('../modelo/conexion.php');
include('../modelo/funcionesBDD.php');

$estado = deleteUsuarioById($link, $id);

if ($estado == 'OK'){
    header("Location:../controlador/inicio.php");
   }else{
    header("Location:\programacion\CRUD\controlador\editar_usuario.php?id?".$id);
   }




?>