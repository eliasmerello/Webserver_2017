<?php
session_start();
if(!$_SESSION)
{
session_destroy();
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.")
parent.location="index.php"</script>';
}
$Id_user=$_SESSION['Id_user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <link rel="stylesheet" href="/Mis_estilos_CSS/Agenda/form-contact.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Consultar-datos</title>
  </head>
<body>
<form action="Mostrar.php" method="post" name="form1" target="medio01" id="form1">
  <div id="main-container">
    <thead>  
    <h1>Consultar datos<IMG SRC="imagenes/ima2.png"></h1><br><br>
      <tr>
        <p>Ingrese su n&uacute;mero de celular:</p>    
        <td><input type="password" name="cedula" class="caja-consulta" size="10" required maxlength="10" autofocus="" /></td>
        <input type="submit"  name="Submit"   value="Consultar" /> 
        <input type="reset"   name="Submit"  value="Limpiar" />
     </tr>
    </thead>  
  </div>
 </form>
<iframe name="medio01" align="center" frameborder="0" scrolling ="si" width="100%" height="1200px"
</iframe>
</iframe>
</body>
</html>