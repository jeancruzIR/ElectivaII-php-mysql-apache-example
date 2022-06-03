<?php require("validaadmin.php");?>
<?php
require("conexion.php");

$tbl_name="clientes"; // Nombre Tabla

$id=$_GET['id'];
// Borrar el registro en mysql solo del id indicado
$sql="DELETE FROM $tbl_name WHERE idCliente='$id'";
$result=mysqli_query($link,$sql);

// Si la eliminación es exitosa
if($result){
echo "El registro se borro correctamente";
echo "<BR>";
echo "<a href='deleteC.php'>Regresar al listado</a>";
}
else {
echo "ERROR: No se puedo borrar el registro";
}
// Cerrar la conexion
mysqli_close($link);
?>