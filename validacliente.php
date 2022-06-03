<?php
session_start();
/*con esto comprobamos que el usuario tipo Cliente se mantenga 
en la pagina que le corresponde tomar en cuenta que $_SESSION["vsTipo"]!='Cliente' indica el valor del tipousuario en la BD 
,asi q debe estar escrito igual el valor de ese campo*/
if(!isset($_SESSION["vsNombre"])||($_SESSION["vsTipo"]!='Cliente'))
{
	header('location:login.php');
}
?>