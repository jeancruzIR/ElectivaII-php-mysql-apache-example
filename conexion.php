<?php
$servidor='localhost';
$usuario='root';
$clave='';
$basededatos='bdcomercio';
$link=mysqli_connect($servidor,$usuario,$clave);
mysqli_select_db($link,$basededatos) or die ('Imposible conectar a la BD: '.mysqli_error());
?>