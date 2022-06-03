<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>EventosClub</title>
</head>

<body>
<div id="control" >
<header>

</header>
<section id="logomenu">

<section id="logo">
<a href="menudeadmin.php"><img src="imagen/logo.png"></img></a>
</section>

<nav id="menu">

<div id="showim"><a id="a1" href="menudeadmin.php">INICIO</a>
</div>
<?php require("validaadmin.php");?>
<div id="showim"><a id="a1" >LISTA DE TABLAS</a>
<ul id="showme">
<li><a href="deleteC.php">CLIENTES</a></li>
</ul>
</div>

<div id="showim"><a id="a1"><?php echo $_SESSION["vsNombre"];?></a>
<ul id="showme">
<li><a id="a2" href="perfil.php">MI PERFIL</a></li>
<li><a id="a2" href="salir.php">SALIR</a></li>
</ul>
</div>
</nav>

</section>

<section id="banner">
    <section></section>
</section>

<section id="body">
			<section id="contenido">
			</br><h1 id="saludo" align="center">BIENVENIDO ADMINISTRADOR!</h1></br>
<p>Hola, le damos la bienvenida al <b>menu de administrador</b>; desde aqui podra hacer los cambios que se consideren necasarios en cuanto al
manejo del catálogo, vista de tablas y todo lo relacionado a la manipulación de la base de datos del sitio.
					</p>
			</section>
</section>

<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>