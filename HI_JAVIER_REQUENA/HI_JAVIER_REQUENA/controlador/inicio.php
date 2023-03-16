
<!-- CABECERA DE LA PÁGINA -->

 <?php 
    include("../vistas/cabecera_html_general.php");
    include("../vistas/cabecera.php");

    include("../vistas/cabecera_tabla_usuarios.php");
 
    include("../modelo/conexion.php");
    include("../modelo/funcionesBDD.php");

    include("../controlador/tabla_usuarios.php");

    // Incluimos el pie de nuestra web

    include("../vistas/pie.php"); 
    include("../vistas/fin_html_general.php");
?>



