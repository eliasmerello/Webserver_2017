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
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="/Mis_estilos_CSS/Fondo.css"> 
	<link rel="stylesheet" href="/Mis_estilos_CSS/Menu.css">
	<title>gbsys_2017</title>
</head>

<body>
	<div class="caja1" id="principal">
	<div class="sesion"id="login"><a1>Bienvenido:</a1> <a2><?php echo $_SESSION['Nombres1'];?></a2></div>
	<div class="salir"id="cerrar"><a href="logoff.php" title="Cerrar sesi&oacute;n">[ Cerrar Sesi&oacute;n ]</a></div>

	<div class="banner" id="logo"><img src="/UG.jpg" width="100%" height="150" /></div>
	<div class="enlazando" id="msj"><h1><marquee>Enlazando ingen&iacute;o y tecnolog&iacute;a</marquee></h1></div>
	
	<p>
	<a href="/Welcome.html" target="medio">Desde</a> esta <a href="/ima1.jpg" target="medio">pagina</a> usted podrá consultar, modificar, eliminar datos de su agenda de contactos, también podrá crear, modificar, eliminar de su lista de clientes.	
	</p>
	
<div class="menu" id="opcion"> </div>
 <header>
	<input type="checkbox" id="btn-menu" />
	<label for="btn-menu"><img src="/icom_enu.png" alt=""></label>
	<nav class="menu">
	 <ul>
	  <li><a href="/RegistroContacto.html" target="medio">Registrar</a></li>
	  <li><a href="/subir_file.html" target="medio">Servicios</a></li>
	  <li><a href="/Opciones_Clientes.html" target="medio">Clientes</a></li>
	  <li><a href="Mostrar_all.php" target="medio">Agenda</a></li>
	  <li><a href="/Welcome.html" target="medio">Contacto</a></li>
	 </ul>
	</nav>
 </header>

<div class="contenedor" id="base">	
	<iframe src="/select.php" name="medio" align="left" frameborder="0" scrolling="no" width="100%" height="90%"</iframe></iframe>
</div>

<div class="caja4" id="fin_pagina"><p1>Derechos reservados por Orangesys 2017<p1/></div>

</div>
</body>
</html>
