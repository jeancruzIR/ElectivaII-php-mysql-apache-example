<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/login.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>EventosClub</title>
</head>

<body>
<div id="control" >
<header>

</header>


<section id="body">

<form id="login" action="validalogin.php" method="POST">
			<h1>Registro de Usuario</h1>
			<input name="correo" type="text" max-length="20" required placeholder="escriba su correo" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"/>
			<input name="clave" type="password" max-length="20" required placeholder="Ingrese su contraseña" pattern="^[a-zA-Z0-9]{7,12}$"/>
			
			<input type="submit" name="sesion" value="Iniciar Sesion"></input>
			
    </form>
	
    </section>

<footer id="pie">
<p align="center" id="copy">Copyright © Derechos Reservados ciclo 01-2022 ETS2-T GRUPO G</p>
</footer>
</div>
</body>
</html>
