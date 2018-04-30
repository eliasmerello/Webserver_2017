<?php
session_start();
if(!$_SESSION)
{
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.")
self.location="index.php"</script>';
}
$Id_user=$_SESSION['Id_user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<script type="text/javascript" src="/My-Script/fecha-hora.js"></script>	
	<link rel="shortcut icon" href="/imagenes/ima1.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="/Mis_estilos_CSS/Fondo.css"> 
	<link rel="stylesheet" href="/Mis_estilos_CSS/Menu.css">
	<title>gbsys_2017</title>
</head>

<body onload="mueveReloj()">
	<div class="caja1" id="principal">
	<div class="fecha" id="gbsys" align="left"></div>

<div class="publicidad" id="publicidad">
<div class="redesociales" id="redesociales" align="right"><a href="https://www.facebook.com" title="Ir a facebook" target="_blank"><img src="/imagenes/facebook.png" /></a>&nbsp;<a href="https://www.youtube.com/channel/UCZUM2-mCIXqcWU9I3dTk9kw?view_as=public" title="Ir a youtube" target="_blank"><img src="/imagenes/youtube.png" /></a></div>
</div>	
<div class="ima" id="date"><img src="/imagenes/Logo_original.png" width="100%" height="150" /></div>
<div class="sesion" id="login" align="right"><a1>Bienvenido:</a1><a2><?php echo $_SESSION['Nombres1'];?></a2></div>
<div class="salir" id="cerrar" align="right"><a href="/logoff.php" title="Cerrar sesi&oacute;n">Cerrar Sesi&oacute;n</a></div>
<div class="enlazando" id="msj"><h1><marquee>Enlazando ingen&iacute;o y tecnolog&iacute;a</marquee></h1></div>
	<div class="menu" id="opcion"> </div>

			 <header>
				<input type="checkbox" id="btn-menu" />
				<label for="btn-menu"><img src="/icom_enu.png" alt=""></label>
				<nav class="menu">
				 <ul>
				  <li><a href="/Homeland.php" target="_parent">Inicio</a></li>
				  <li><a href="/Register/Registrar-Contacto.php" target="_parent">Registrar</a></li>
				  <li><a href="/Services/Services.php" target="_parent">Servicios</a></li>
				  <li><a href="/Clients/Clientes.php" target="_parent">Clientes</a></li>
				  <li><a href="/Mi-Agenda-de-contactos/Agenda.php" target="_parent">Agenda</a></li>
				  <li><a href="/Welcome.html" target="_parent">Contacto</a></li>
				  <li><a href="/Welcome.html" target="_parent">Elias</a></li>
				 </ul>
				</nav>
			 </header>

		<div class="contenedor" id="base">	
			<iframe src="/Services/subir_file.html" name="medio" align="left" frameborder="0" scrolling="auto" width="100%" height="100%"</iframe></iframe>
		</div>

		<div class="caja4" id="fin_pagina"><p1>Derechos reservados por Orangesys 2011 - 2017<p1/></div>

	</div>
	</center>
</body>
</html>
