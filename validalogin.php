<?php
session_start(); //Esta instruccion activa el uso de variables de sesion
require('conexion.php');
//capturar los valores del formulario
$correo=$_POST['correo'];
$clave=$_POST['clave'];
//escribir la instruccion mysql
$sql="SELECT * FROM clientes where correo='$correo' and contrasena='$clave'";
//ejecuto la instruccion
$resultado=mysqli_query($link,$sql);
//cuento si hay filas devueltas
$cuantas=mysqli_num_rows($resultado);
if($cuantas>0)
{
	//Si el usuario y la clave existen en la BD
	//convierto los resultados en un arreglo
	$cliente=mysqli_fetch_array($resultado);
	//Definir las variables de sesion
	$_SESSION['vsIdUser']=$cliente['idCliente'];
	$_SESSION['vsNombre']=$cliente['nombre'].' '.$cliente['apellido'];
	$_SESSION['vsTipo']=$cliente['tipousuario'];
	$_SESSION['vsCorreo']=$cliente['correo'];
	$_SESSION['vsTelefono']=$cliente['telefono'];
	$_SESSION['vsPais']=$cliente['pais'];
	$_SESSION['vsContraseña']=$cliente['contrasena'];
	
	$tipousuario=$cliente['tipousuario'];
	if($tipousuario=='admin')
	{
		//enviar a la pagina de administradores
		header('location:menudeadmin.php');
	}
	else
	{
		//Enviar a la pagina de clientes
		header('location:menudecliente.php');
	}
}
else
{
	//Si el usuario y la clave no existen en la BD
	echo 'Acceso denegado, correo o clave no exiten...';
	echo '<a href="login.php">Volver</a>';
	header('location:login.php?msj="Acceso denegado..."');
}
?>