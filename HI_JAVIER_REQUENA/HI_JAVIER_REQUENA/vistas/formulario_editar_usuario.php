<?php 

$formulario = '

<div class="container">
    <form action="../modelo/actualizar_usuario.php" method="POST">
    <input type="hidden" name = "id" id = "id" value="'.$usuario['id'].'">
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario_help" placeholder="Usuario" value = "'.$usuario['usuario'].'">
        <small id="usuario_help" class="form-text text-muted">Nombre del usuario.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value = "'.$usuario['password'].'">
    </div>
    <div class="form-group">
        <label for="activo">Activo</label>
        <input type="text" class="form-control" id="activo" name="activo" placeholder="usuario Activo s/n" value = "'.$usuario['activo'].'">
    </div>
    <div class="form-group">
        <label for="activo">Tipo Usuario</label>
        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de Usuario" value = "'.$usuario['tipousuario'].'">
    </div>
    <!--<div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Activo</label>
    </div>-->
    <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </form>
</div>';

echo $formulario;