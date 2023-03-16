<?php

/* ACTUALIZAR LOS USUARIOS QUE YA TENEMOS CUANDO ESTAMOS EN EL OTRO APARTADO Y LE DAMOS A EDITAR */

    $id = $_POST['id'];
   $editusuario = $_POST['usuario'];
   $password = $_POST['password'];
   $activo = $_POST['activo'];
   $tipousuario = $_POST['tipo'];

   include('../modelo/conexion.php');
   include('../modelo/funcionesBDD.php');

   $resultado = updateUsuario($link, $id, $editusuario, $password, $activo, $tipousuario);

   if ($resultado == 'OK'){
    header("Location:../controlador/inicio.php");
   }else{
    header("Location:\programacion\CRUD\controlador\editar_usuario.php?id?".$id);
   }



?>