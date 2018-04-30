<?php
session_start();
if(!$_SESSION)
{
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.")
blank.location="index.php"</script>';
}
$Id_user=$_SESSION['Id_user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/form-client.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consultar-datos-cliente</title>
</head>
<body>
<form action="Mostrar_cliente.php" method="post" name="form1" target="medio02" id="form1">
  <div id="main-container">
      <thead>
        <h1>Consultar Informaci&oacute;n de cliente <IMG SRC="imagenes/ima1.png"></h1><br>  
          <tr>
            <p>Ingrese su codigo:</p>
              <td><input name="cedula" type="password" class="caja-consulta" id="cedula" size="10" required maxlength="3" autofocus /></td>
              <input type="submit" name="Submit" value="Consultar" id="Submit" />
              <input type="reset" name="Submit2" value="Delete" id="Submit2" />
            </td>
	         </tr>
      </thead>
  </div>
</form>
<br><br>
<iframe name="medio02" align="left" frameborder="0" scrolling ="auto" width="100%" height="400px" 
</iframe>
</iframe>
</body>
</html>
