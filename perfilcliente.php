<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/admin.css">
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
<li><a id="a2" href="Perfilcliente.php">MI PERFIL</a></li>
<li><a id="a2" href="Salir.php">SALIR</a></li>
</ul>
</div>
</nav>

</section>

<section id="bannercliente">
    <section></section>
</section>


<section id="body">
			<section id="contenido">
			</br><h1 id="tema" align="center">MI PERFIL</h1></br>
<p>Estas viendo los datos de tu perfil que se crearon cuando te registrastes</br>
		</p>
		<table>
		<tr>
		<td>
		te llamas:
		</td>
		<td>
		<?php echo $_SESSION["vsNombre"];?>
		</td>
		</tr>
		<tr>
		<td>correo:
		</td>
		<td><?php echo $_SESSION["vsCorreo"];?>
		</td>
		</tr>
		<tr>
		<td>telefono:
		</td>
		<td><?php echo $_SESSION['vsTelefono'];?>
		</td>
		</tr>
		<tr>
		<td>pais:
		</td>
		<td><?php echo $_SESSION['vsPais'];?>
		</td>
		</tr>
		<tr>
		<td>contraseña que usas:
		</td>
		<td><?php echo $_SESSION['vsContraseña'];?>
		</td>
		</tr>
		<tr>
		<td>tipo
		</td>
		<td><?php echo $_SESSION["vsTipo"];?>
		</td>
		</tr>
		
		</table>
			</section>

</section>





<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>
