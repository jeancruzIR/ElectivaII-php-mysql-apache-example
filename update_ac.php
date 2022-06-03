<?php require("validaadmin.php");?>
<?php
require("conexion.php");

$tbl_name="clientes"; // Nombre Table

$nom=$_POST['nombre'];
$cor=$_POST['correo'];
$ape=$_POST['apellido'];
$contra=$_POST['contrasena'];
$tipo=$_POST['tipousuario'];
$fec=$_POST['fecha'];
$id=$_POST['id'];

// Actualizamos los datos en mysql solo los que corresponde al id
//enviado
$sql="UPDATE $tbl_name SET nombre='$nom',
correo='$cor', apellido='$ape', contrasena='$contra', tipousuario='$tipo', fechaing='$fec' WHERE idCliente='$id'";
$result=mysqli_query($link,$sql);
// Si la actualizacion es exitosa.
if($result){
	echo "Los datos se modificaron correctamente";
echo "<BR>";
echo "<a href='deleteC.php'>Regresar al listado</a>";
}
else {
echo "ERROR: No se pudo actualizar la informacion";
echo"<a href='updateC.php'>intentar otra vez</a></br>
	o </br>
	<a href='deleteC.php'>Regresar al listado</a>";
}
?>
