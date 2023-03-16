<?php

/* Esta es la tabla donde vamos a meter los datos de los usuarios para ser guardados */

$recordset = getTodos($link);


while($fila = mysqli_fetch_array($recordset)){
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['usuario']."</td>";
    echo "<td>".$fila['password']."</td>";
    echo "<td>".$fila['activo']."</td>";
    echo "<td>".$fila['tipousuario']."</td>";
    echo '<td><a class="btn btn-primary" href="editar_usuario.php?id='.$fila["id"].'" role="button" aria-expanded="false">
    Editar</a></td>';
    echo '<td><a class="btn btn-danger" href="eliminar_usuario.php?id='.$fila["id"].'" role="button" aria-expanded="false">
    Borrar</a></td>';
    echo "</tr>";
}


?>

</table>
</div>