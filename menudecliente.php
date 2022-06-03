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
<a href="menudecliente.php"><img src="imagen/logo.png"></img></a>
</section>

<nav id="menu">

<div id="showim"><a id="a1" href="menudecliente.php">INICIO</a>
</div>
<div id="showim"><a id="a1">
<?php require("validacliente.php");
echo $_SESSION["vsNombre"];?></a>
<ul id="showme">
<li><a id="a2" href="perfilcliente.php">MI PERFIL</a></li>
<li><a id="a2" href="salir.php">SALIR</a></li>
</ul>
</div>
</nav>

</section>

<section id="bannercliente">
    <section></section>
</section>

<section id="body">
			<section id="contenido">
			</br><h1 id="saludo" align="center">BIENVENIDOS</h1></br>
<p>Sean bienvenidos a nuestro sitio web, donde encontraran una variedad de temas que les servira de ayuda en su asignatura
					ademas podran accesar a otros sitios donde podran descargar software de desarrollo, juegos, aplicaciones para pc o smartphone, etc.</br>
					
					</p>
			</section>
</section>



<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>