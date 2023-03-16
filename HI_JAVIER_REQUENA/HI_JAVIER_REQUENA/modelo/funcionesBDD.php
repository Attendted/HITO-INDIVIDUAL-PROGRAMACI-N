<?php

/* TODAS LAS CONSULTAS QUE PODEMOS UTILIZAR EN LA BASE DE DATOS */

function conecta(){
    $host = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $base_de_datos = "HITOBDD";
    $link = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
    return $link;
}
    
    
function getTodos($link){

    $registros = mysqli_query($link,
    "SELECT * FROM `usuarios`");

    return $registros;
}

function getUsuario($link, $nombre, $password){

    $sql = "SELECT * FROM `usuarios` WHERE usuario = '".$nombre."' AND password = '".$password."'";

    $registros = mysqli_query($link,$sql);

    return $registros;


}

function getUsuarioById($link, $id){

    $sql = "SELECT * FROM `usuarios` WHERE id = ".$id;

    $registros = mysqli_query($link,$sql);

    return $registros;

}

function setUsuario($link, $usuario, $password, $activo, $tipousuario){

    $estado = '';

    $sql = "INSERT INTO usuarios (usuario, password, activo, tipousuario) VALUES ('$usuario', '$password', '$activo', '$tipousuario')";
    $dataset = mysqli_query($link, $sql);

    if ($dataset){
        $estado = 'OK';
    }else{
        $estado = 'ERROR';
    }

    return $estado;
}

function updateUsuario($link, $id, $usuario, $password, $activo, $tipousuario){
    $estado = '';

    //$sql = "INSERT INTO usuarios (usuario, password, activo, tipousuario) VALUES ('$usuario', '$password', '$activo', '$tipousuario')";
    
    $sql = "UPDATE usuarios 
            SET usuario='".$usuario."',
            password='".$password."',
            activo='".$activo."',
            tipousuario='".$tipousuario."' 
            WHERE id=".$id;

    $dataset = mysqli_query($link, $sql);

    if ($dataset){
        $estado = 'OK';
    }else{
        $estado = 'ERROR';
    }

    return $estado;
}

function deleteUsuarioById($link, $id){

    $sql = "DELETE FROM `usuarios` WHERE id = ".$id;

    $registros = mysqli_query($link,$sql);

    return $registros;

}


?>