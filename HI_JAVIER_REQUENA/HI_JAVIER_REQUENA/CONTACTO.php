<?php 
setcookie('ip', $_SERVER['REMOTE_ADDR']);
$oockieip = $_COOKIE['ip']
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/normalize.css">
<link rel="stylesheet" href="webgrafía.html">
<link rel="stylesheet" href="CONTACTO.html">
<link href="webgrafia.html">
<script src="https://kit.fontawesome.com/a7daddc7d9.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<title>Hito_Grupal Lenguaje de Marcas</title>
</head>
<body>
<div id="padre">
<div id="arriba">
<header id="encabezado_principal">
<a id="logo-header" href="index.html">
<span class="site-name">HITO GRUPAL </span>
<div  class="desaparecer"><span class="site-desc !importante">JAVIER REQUENA</span></div>
</a>
<div id="hamburguesa"><i class="fa-solid fa-2x fa-bars"></i></div>
<nav id="menunavegacion">

<ul class="desaparecer" id="desaparece">
<li><a href="index.html">INICIO</a></li>
<li><a href="controlador/login.php">LOGIN</a></li>
<li><a href="controlador/inicio.php">REGISTRO</a></li>
</ul>
</nav>
  </div>
  
</header>
</div>
<div id="medio">
<div id="info1">
<div id="header">
    <div id="espacio"></div>
			<ul class="nav">
				
				<li><a href=""><h5>Categorías</h5></a>
					<ul>
						<li><a href="controlador/login.php">LOGIN</a></li>
                        <li><a href="controlador/inicio.php">REGISTRO</a></li>
						</li>
					</ul>
				</li>
				<li><a href=""><h5>Redes Sociales</h5></a>
					<ul>
                        <li><a href="https://www.facebook.com/groups/xml.es/">Facebook</a></li>
                        <li><a href="https://twitter.com/liquidxml?s=11&t=4iHB0E26RQsO8NhEsdXF2w">Twitter</a></li>
						<li><a href="https://youtu.be/cQnwAoW80r0">Youtube</a></li>
                        <li><a href="https://www.instagram.com/xmloffice/?hl=es">Instagram</a></li>
					</ul>
				</li>
			</ul>
		</div>
        <div id="space"></div>
        <div class="ajustar">
        <div id="ultpost">
            <ul>
            <li><p><h3 id="c">Últimos Post</h3></p></li>
            <li><h5>XML</h5><a class="x" href="https://www.computing.es/mercado-ti/noticias/1006211046401/bases-datos-enfrentan-xml.1.html"> <p>Las bases de datos se enfrentan a XML</a></li>
            <li><h5>JSON</h5><a class="x" href="https://blog.ehcgroup.io/2023/01/10/10/49/54/14557/grave-falla-de-seguridad-encontrada-en-la-biblioteca-jsonwebtoken-utilizada-por-mas-de-22-000-proyectos/noticias-de-seguridad/ehacking/"> <p> GRAVE FALLA DE SEGURIDAD ENCONTRADA EN LA BIBLIOTECA UTILIZADA POR MÁS DE 22 000 PROYECTOS</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="info2">
    <div id="espacio"></div>
    <div id="arribaa">
    <div class="container">
        <h1>POSTEAR</h1>
        <div id="espacio"></div>
        <div id="screen">
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="user" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" required></textarea>
            
            <input type="submit" value="Enviar">
          </form>
    </div>
    <div id="grande">
        <section class="form_wrap">

    
            <form method="POST" action="" class="form_contact">
                <h2>POST</h2>
                <div>
                    <label for="names">Usuario</label>
                    <input type="text" id="names">
    
                    <label for="phone">Contraseña</label>
                    <input type="password" id="password">
    
                    <label for="email">Correo electronico *</label>
                    <input type="text" id="email">
    
                    <label for="mensaje">TEXTO</label>
                    <textarea id="mensaje"></textarea>
    
                    <input type="button" value="Postear" id="btnSend">
                </div>
            </form>
    
        </section>
    </div>
</div>
    </div>
      <div id="espacio"></div>
      <div class="desaparecer2">
      <div class="contenedor-redes-sociales">
        <a class="facebook" href="https://www.facebook.com/groups/xml.es/" target="_blank">
            <span class="circulo"><i class="fa fa-facebook"></i></span>
            <span class="titulo">Facebook</span>
            <span class="titulo-hover">Seguir</span>
        </a>

       <a class="twitter" href="https://twitter.com/liquidxml?s=11&t=4iHB0E26RQsO8NhEsdXF2w" target="_blank">
           <span class="circulo"><i class="fa fa-twitter"></i></span>
           <span class="titulo">Twitter</span>
           <span class="titulo-hover">Seguir</span>
       </a>

       <a class="gplus" href="https://youtu.be/cQnwAoW80r0" target="_blank">
           <span class="circulo"><i class="fa fa-youtube"></i></span>
           <span class="titulo">YouTube</span>
           <span class="titulo-hover">Seguir</span>
       </a>

       <a class="ig" href="https://youtu.be/cQnwAoW80r0" target="_blank">
        <span class="circulo"><i class="fa fa-instagram"></i></span>
        <span class="titulo">Instagram</span>
        <span class="titulo-hover">Seguir</span>
    </a>
   </div>
</div>
</div>

  
</div>

<footer id="main-footer">
<p>&copy; 2022 CAMPUSFP</a></p>
</footer>
</div>
</body>
</html>