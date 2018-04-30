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
<title>Registrar Nuevo Cliente</title>
<?php
include("Conexion.php");
if(isset ($_POST['nombres']) && !empty ($_POST['nombres']) && isset  ($_POST['apellidos']) && !empty ($_POST['apellidos']) && isset($_POST['codigo']) && !empty ($_POST['codigo'])&& isset($_POST['empresa']) && !empty ($_POST['empresa']) && isset($_POST['direccion']) && !empty ($_POST['direccion']) && isset ($_POST['fijo']) && !empty ($_POST['fijo']) /*&& isset($_POST['ope']) && !empty ($_POST['ope'])*/ && isset ($_POST['num']) && !empty ($_POST['num']) && isset ($_POST['ruc']) && !empty ($_POST['ruc']) && isset ($_POST['mail']) && !empty ($_POST['mail'] ))

if((is_numeric ($_POST['codigo'])) && (is_numeric($_POST['fijo'])) && (is_numeric($_POST['num'])) && (is_numeric($_POST['ruc'])))
{
	$conexion=mysql_connect($host, $user, $pw) or die ("Problemas al conectarse al servidor gbsys.sytes.net");
	mysql_select_db ($db,$conexion) or die ("Problemas al conectarse");
	mysql_query ("INSERT INTO reg_clientes (Nombres, Apellidos, Codigo, Empresa, Direccion, Fijo, Operadora, Numero, RUC, Mail) VALUES 				('$_POST[nombres]','$_POST[apellidos]','$_POST[codigo]','$_POST[empresa]','$_POST[direccion]','$_POST[fijo]','$_POST[ope]','$_POST[num]', '$_POST[ruc]','$_POST[mail]')",$conexion); 
  
  	echo'<script language = javascript>
  	alert("Serverweb: Datos guardados correctamente_2017.")
  	self.location="select_clientes.php"</script>';

}/*IF VALIDA CAJA DE TEXTO NUMERICO*/

else{
	echo'<script language = javascript>
  	alert("Serverweb: Los campos: Codigo, convencional, número y RUC deben ser númericos")
  	self.location="RegistroClient.php"</script>';
   }

else{
  echo'<script language = javascript>
  alert("Serverweb: No se ha enviado ningun valor.")
  self.location="RegistroClient.php"</script>';
  die();
   }
?>