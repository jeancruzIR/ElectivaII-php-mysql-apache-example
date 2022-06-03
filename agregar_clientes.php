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
			</br><h1 id="tema" align="center">AGREGAR CLIENTES/USUARIOS</h1></br>
<p>Aqui se puede agregar nuevos clientes o usuarios.</br>
<a href="deleteC.php">ver registro de clientes</a>
		</p>
		<form id="login" name="frmInsertar" action="guardarclienteLA.php" method="POST">
			<h1>Formulario de Registro</h1>
			<p>Nombre:</p>
<input type="text" name="nombre" required placeholder="ingrese nombre"></input>

			<p>Apellido:</p>
<td><input type="text" name="apellido" required placeholder="ingrese apellido"></input></td>

		

<p>Correo:</p>
<td><input type="text" name="correo" required placeholder="ejemplo@servidor.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"></input></td>

<p>Telefono:</p>
<td><input type="text" name="telefono" required placeholder="ingrese numero de telefono"></input></td>

<p>Pais:</p>
<td><input type="text" name="pais" required placeholder="ingrese pais"></input></td>

<p>*Elija que tipo de usuario sera, preste atencion.</p>
<p>Tipo de usuario:</p>
<p>cliente<input type="radio" name="tipo" value="Cliente" required></input>
&nbsp&nbsp&nbsp
administrador<input type="radio" name="tipo" value="admin" required></p>

<p>*La contraseña debe poseer entre 7 y 12</br> caracteres (números o letras)</p>


<p>Contraseña que usara:</p>
<td><input type="text" name="contraseña" required placeholder="ingrese contraseña" pattern="^[a-zA-Z0-9]{7,12}$"></input></td>

<tr>

			<input type="submit" value="Registrar Datos"></input>
			<input type="reset" value="Limpiar"></input>
	</form>
			</section>
</section>

<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>