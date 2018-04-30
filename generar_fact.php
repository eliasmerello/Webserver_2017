<?php
include("Conexion.php");
if(isset($_POST['nombres']) && !empty ($_POST['nombres']) && isset ($_POST['direccion']) && !empty ($_POST['direccion']) && isset($_POST['ruc']) && !empty ($_POST['ruc']) && isset($_POST['codigo']) && !empty ($_POST['codigo']) && isset ($_POST['factura']) && !empty ($_POST['factura'])&& isset  ($_POST['fecha']) && !empty ($_POST['fecha'])&& isset  ($_POST['ciudad']) && !empty ($_POST['ciudad']) && isset  ($_POST['fijo']) && !empty ($_POST['fijo']) && isset  ($_POST['ope']) && !empty ($_POST['ope']) && isset  ($_POST['num']) && !empty ($_POST['num']) && isset  ($_POST['vendedor']) && !empty ($_POST['vendedor']) && isset  ($_POST['mail']) && !empty ($_POST['mail']) && isset  ($_POST['cantidad']) && !empty ($_POST['cantidad']) && isset  ($_POST['servicio']) && !empty ($_POST['servicio']) && isset  ($_POST['valoru']) && !empty ($_POST['valoru']) && isset  ($_POST['valor']) && !empty ($_POST['valor'])  && isset  ($_POST['subtotal']) && !empty ($_POST['subtotal']) && isset ($_POST['iva']) && !empty ($_POST['iva']) && isset  ($_POST['total']) && !empty ($_POST['total']) ) 
{
$conexion=mysql_connect($host, $user, $pw) or die ("Problemas al conectarse al servidor_2017");
mysql_select_db ($db,$conexion) or die ("Problemas al conectarse a la base de datos");
mysql_query ("INSERT INTO factura (Cliente, Direccion, Ruc, Codigo, Factura_Num, Fecha, Ciudad, Fijo, Operadora, Numero, Vendedor, Mail, Cantidad, Servicio, Valor_Uni, Valor, Cantidad1, Servicio1, Valor_Uni1, Valor1, Cantidad2, Servicio2, Valor_Uni2, Valor2, Cantidad3, Servicio3, Valor_Uni3, Valor3, Subtotal, Iva, Total) VALUES ('$_POST[nombres]','$_POST[direccion]','$_POST[ruc]','$_POST[codigo]','$_POST[factura]','$_POST[fecha]','$_POST[ciudad]','$_POST[fijo]','$_POST[ope]','$_POST[num]','$_POST[vendedor]','$_POST[mail]','$_POST[cantidad]','$_POST[servicio]','$_POST[valoru]','$_POST[valor]','$_POST[cantidad1]','$_POST[servicio1]','$_POST[valoru1]','$_POST[valor1]','$_POST[cantidad2]','$_POST[servicio2]','$_POST[valoru2]','$_POST[valor2]','$_POST[cantidad3]','$_POST[servicio3]','$_POST[valoru3]','$_POST[valor3]','$_POST[subtotal]','$_POST[iva]','$_POST[total]')",$conexion);

echo'<script language = javascript>
alert("Serverweb: Factura generada correctamente.")
self.location="select_factura.php"</script>';
die();
}
else
{
echo'<script language = javascript>
alert("Serverweb: No se genero la factura.Vuelva a intentarlo")
self.location="Factura.php"</script>';
 die();
}
?>