<?php

$continuar = 'n';

foreach($_POST as $campo => $valor){
    if ($campo == ''){
        $continuar = 'n';
    }else{
        $continuar = 's';
    }

}

if ($continuar == 'n'){
    header("Location:../controlador/nuevo_usuario.php");
}else{
 

   $nuevousuario = $_POST['usuario'];
   $password = $_POST['password'];
   $activo = $_POST['activo'];
   $tipousuario = $_POST['tipo'];

   include('../modelo/conexion.php');
   include('../modelo/funcionesBDD.php');

   $resultado = setUsuario($link, $nuevousuario, $password, $activo, $tipousuario);

   if ($resultado == 'OK'){
    header("Location:../controlador/inicio.php");
   }else{
    header("Location:\programacion\CRUD\controlador\nuevo_usuario.php");
   }


}


?>