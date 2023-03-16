<div class="container">
    <form action="../modelo/crear_usuario.php" method="POST">
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuario_help" placeholder="Usuario">
        <small id="usuario_help" class="form-text text-muted">Nombre del usuario.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="activo">Activo</label>
        <input type="text" class="form-control" id="activo" name="activo" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="activo">Tipo Usuario</label>
        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Password">
    </div>
    <!--<div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Activo</label>
    </div>-->
    <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
</div>