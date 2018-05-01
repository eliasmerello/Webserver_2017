<?php
session_start();
$usuario= $_POST["txtuser"]; /*La  variable $usuario guarda la info que se envio del formulario por el método POST*/
$pass= $_POST["txtpass"]; /*La  variable $pass guarda la info que se envio del formulario por el método POST*/

include('Conexion.php'); /*Incluyo mi archivo de conexión*/

$sql= "SELECT * FROM sesion WHERE Usuario3='$usuario' AND Password3= '$pass'"; /*Inyecto el código sql para seleccionar el registro de mi tabla "sesión"*/
$resultado=mysql_query($sql,$conexion) or die (mysql_error()); /*La variable resultado guarda la consulta*/
$fila=mysql_fetch_array($resultado); /*La variable $fila* guarda el dato seleccionado*/

 if($fila[0]) /*Compara la condicion, si el valor de fila es 0, entonces si hay usuario en mi tabla "sesión", caso contrario no establece una sesion, porque no hay ningun registro en mi tabla "sesión"*/
 {
  $_SESSION['Id_user']=$fila['Id_user']; /*Compara los valores de la tabla sesión con los de la consulta*/ 
  $_SESSION['Nombres1']=$fila['Nombres1'];/*Si la condición se cumple, inicia una sesión, y nos reenvía a la´página de inicio "Homeland"*/
  echo'<script language = javascript>
  alert("Serverweb: Acceso permitido")
  self.location="Homeland.php"</script>';  
 }

/*Caso contrario, evalúa otra condición, en este caso que el formulario de inicio de sesión no envíe valores vacios*/

 if(isset ($_POST['txtuser']) && !empty ($_POST['txtuser']) && isset ($_POST['txtpass']) && !empty ($_POST['txtpass']))

  {
  		echo'<script language = javascript>
  		alert("Serverweb: Usuario o password son incorrectos.Vuelva a intentarlo")
  		self.location="index.php"</script>'; /*Me regresa nuevamente a mi pagina de login*/
  } 
/*Caso contrario, evalúa que el formulario de inicio de sesión no envíe valores vacios*/
  else{
 	 	echo'<script language = javascript>
  		alert("Serverweb: El campo usuario y contrasena son requeridos.")
  		self.location="index.php"</script>';
  		die();
  	}


?>