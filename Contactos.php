<?php
session_start();
if(!$_SESSION)
{
session_destroy();  
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.")
parent.location="index.php"</script>';
}
#$Id_user=$_SESSION['Id_user'];
?>

<title>Mostrar_Datos</title>

<?php
include("Conexion.php");
if(isset ($_POST['nombres']) && !empty ($_POST['nombres']) && isset  ($_POST['apellidos']) && !empty ($_POST['apellidos'])&& isset  ($_POST['direccion']) && !empty ($_POST['direccion']) && isset ($_POST['fijo']) && !empty ($_POST['fijo']) && isset($_POST['ope']) && !empty ($_POST['ope']) && isset ($_POST['num']) && !empty ($_POST['num']) && isset ($_POST['mail']) && !empty ($_POST['mail'] ))

if((is_numeric($_POST['fijo'])) && (is_numeric($_POST['num'])))
{
	$con=mysql_connect($host, $user, $pw) or die ("Problemas al conectarse al servidor gbsys.sytes.net");
	mysql_select_db ($db,$con) or die ("Problemas al conectarse");
	mysql_query ("INSERT INTO datos (Nombres, Apellidos, Direccion, Fijo, Operadora, Numero, Mail) VALUES('$_POST[nombres]','$_POST[apellidos]','$_POST[direccion]','$_POST[fijo]','$_POST[ope]','$_POST[num]','$_POST[mail]')",$con); 
  
  	echo'<script language = javascript>
  	alert("Serverweb: Datos ingresados correctamente.")
  	self.location="RegistroContacto.html"</script>';

}/*IF VALIDA CAJA DE TEXTO NUMERICO*/

else{
	echo'<script language = javascript>
  	alert("Serverweb: Los campos: Convencional y número deben ser númericos")
  	self.location="RegistroContacto.html"</script>';
   }

else{
  echo'<script language = javascript>
  alert("Serverweb: No se ha enviado ningun dato.")
  self.location="RegistroContacto.html"</script>';
  die();
   }
?>