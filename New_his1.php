<?php
include("Conexion.php");
if(isset($_POST['co']) && !empty ($_POST['co']) && isset ($_POST['no']) && !empty ($_POST['no']) && isset($_POST['empresa']) && !empty ($_POST['empresa']) && isset($_POST['fecha']) && !empty ($_POST['fecha']) && isset ($_POST['modelo']) && !empty ($_POST['modelo'])&& isset($_POST['historial']) && !empty ($_POST['historial'])&& isset($_POST['estado']) && !empty ($_POST['estado']) ) 
{
$conexion=mysql_connect($host, $user, $pw) or die ("Problemas al conectarse al servidor_2017");
mysql_select_db ($db,$conexion) or die ("Problemas al conectarse a la BD");
mysql_query ("INSERT INTO historiales (Codigo, No, Empresa, Fecha, Modelo, Historial, Estado) VALUES ('$_POST[co]','$_POST[no]','$_POST[empresa]','$_POST[fecha]','$_POST[modelo]','$_POST[historial]','$_POST[estado]')",$conexion);

echo'<script language = javascript>
alert("Serverweb: Historial ingresado correctamente.")
self.location="Select2.html"</script>';
die();
}
else
{
echo'<script language = javascript>
alert("Serverweb: No se registro el historial.Vuelva a intentarlo")
self.location="New_his.php"</script>';
 die();
}
?>