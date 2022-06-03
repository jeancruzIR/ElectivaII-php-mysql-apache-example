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
			</br><h1 id="tema" align="center">ACTUALIZAR CLIENTES</h1></br>
<p>Ahora puedes actualizar los datos, puedes editar los campos que quieras.</br>
<a href="deleteC.php">ver registro de productos</a>
		</p>
<?php
require("conexion.php");

$tbl_name="clientes"; // Nombre Table

$id=$_GET['id'];

// recuperar el registro en mysql solo del id indicado
$sql="SELECT * FROM $tbl_name WHERE idCliente='$id'";
$result=mysqli_query($link,$sql);
$rows=mysqli_fetch_array($result);
?>

<form id="formupdate" method="post" action="update_ac.php">
<div>
<table >
<tr>

<td colspan="8" align="center"><strong>Actualizacion de datos</strong>
</td>
</tr>
<tr>

</tr>
<tr>

<td align="center"><strong>Nombre</strong></td>
<td align="center"><strong>Apellido</strong></td>
<td align="center"><strong>Correo</strong></td>
<td align="center"><strong>Telefono</strong></td>
<td align="center"><strong>Pais</strong></td>
<td align="center"><strong>Contrasena</strong></td>
<td align="center"><strong>Tipo usuario</strong></td>
<td align="center"><strong>Fecha</strong></td>
</tr>
<tr>

<td align="center"><input name="nombre" type="text"
id="name" value="<?php echo $rows['nombre']; ?>"></td>
<td align="center"><input name="apellido" type="text"
id="lastname" value="<?php echo $rows['apellido']; ?>"
size=""></td>
<td><input name="correo" type="text" id="email" value="<?php
echo $rows['correo']; ?>" size=""></td>
<td><input name="telefono" type="text" id="email" value="<?php
echo $rows['telefono']; ?>" size=""></td>
<td><input name="pais" type="text" id="email" value="<?php
echo $rows['pais']; ?>" size=""></td>
<td><input name="contrasena" type="text" id="email" value="<?php
echo $rows['contrasena']; ?>" size=""></td>
<td><input name="tipousuario" type="text" id="email" value="<?php
echo $rows['tipousuario']; ?>" size=""></td>
<td><input name="fecha" type="text" id="email" value="<?php
echo $rows['fechaing']; ?>" size=""></td>
</tr>
<tr>

<td><input name="id" type="hidden" id="id" value="<?php
echo $rows['idCliente']; ?>"></td>
<td align="center" colspan="4"></td>

</tr>
</table>
</div>
<input type="submit" name="Submit"
value="Actualizar">
</form>

 <!--Si observan hemos agregado los inputs y en la propiedad value
asignamos el valor que extraemos de la consulta mysql.-->
<?php
// cerramos la conexion
mysqli_close($link);
?>
	</section>
</section>

<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>