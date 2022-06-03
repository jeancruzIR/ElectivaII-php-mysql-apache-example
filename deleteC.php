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
			</br><h1 id="tema" align="center">CLIENTES</h1></br>
<p>Aqui se muestra el listado de la tabla clientes</br>
<a href="agregar_clientes.php">agregar un nuevo cliente</a></br>

		</p>
		
		<?php
require("conexion.php");

$tbl_name="clientes"; // Nombre Table

// Recuperar los datos de la tabla
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($link,$sql);
?>
<div id="tabladatos">
<tr>
<td><table width="100%" border="0" cellpadding="3"
cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="10" align="center" bgcolor="#FFFFFF"><strong>datos en la tabla</strong> </td>
</tr>
<tr>
<td align="center"
bgcolor="#FFFFFF"><strong>idCliente</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Nombre</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Apellido</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Correo</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Telefono</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Pais</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Contraseña</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Tipousuario</strong></td>
<td align="center"
bgcolor="#FFFFFF"><strong>Fecha ingreso</strong></td>
<td align="center" bgcolor="#FFFFFF">&nbsp;</td>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['idCliente']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['nombre']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['apellido']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['correo']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['telefono']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['pais']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['contrasena']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['tipousuario']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['fechaing']; ?></td>
<td align="center" bgcolor="#FFFFFF"><a href="delete_ac.php?id=<?php echo
$rows['idCliente']; ?>">delete</a>&nbsp;
<a href="updateC.php?id=<?php echo $rows['idCliente']; ?>">update</a>
</td>
</tr>
<?php
// Cerrar el while
}
// Cerrar la conexion;
mysqli_close($link);
?>
</table></td>
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