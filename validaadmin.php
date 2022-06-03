<?php
session_start();
if(!isset($_SESSION["vsNombre"])||($_SESSION["vsTipo"]!='admin'))
{
	header('location:login.php');
}	
?>