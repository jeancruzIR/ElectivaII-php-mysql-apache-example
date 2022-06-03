<?php require("validaadmin.php");?>
<?php
//Establezco la conexion con la BD
include("conexion.php");
//Capturo los datos que vienen del formulario con metodo POST
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$cor=$_POST['correo'];
$tel=$_POST['telefono'];
$pais=$_POST['pais'];
$cla=$_POST['contraseña'];
$tip=$_POST['tipo'];
$fec=date('Y-m-d H:i:s');

/*Crear la instruccion SQL para guardar, 
OJO: en mysql se debe tener cuidado con la letra ñ, yo tuve que cambiar el nombre del 
campo contraseña por contrasena*/
$sql="INSERT INTO clientes (nombre, apellido, correo, telefono, pais, contrasena, tipousuario, fechaing) values ('$nom', '$ape', '$cor', '$tel', '$pais', '$cla', '$tip', '$fec')";
$resultado=mysqli_query($link,$sql);
if($resultado)
{
	echo "Has registrado con exito, la persona puede usar su cuenta...<br>";
	echo "<a href='agregar_clientes.php'>click aqui para agregar un nuevo cliente o usuario</a></br>";
	echo "<a href='deleteC.php'>ver registro</a>";
	}
else
{
	echo "El registro ha fallado...<br>";
	echo "<a href='agregar_clientes.php'>intentar de nuevo</a>";
}
?>