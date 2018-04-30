<?php
session_start();
if(!$_SESSION)
{
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.Vuelva a intentarlo")
blank.location="index.php"</script>';
}
$Id_user=$_SESSION['Id_user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/form-client.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consultar-factura</title>
</head>
<body>
<form action="Mostrar_factura.php" method="post" name="form1" target="medio01" id="form1">
  <div id="main-container">
      <thead>
        <h1>Consultar Factura</h1><br>  
          <tr>
            <p>Ingrese su n&uacute;mero de factura:</p>
            <td><input name="num_fact" type="password" class="caja-consulta" required maxlength="6"  size="20"  autofocus /></td>
          </tr>  
            <td><input type="submit" name="Submit" value="Buscar" id="Submit" /></td>
            <td><input type="reset" name="Submit2" value="Delete" id="Submit2" /></td>
      </thead>
  </div>
</form><br><br>
<iframe name="medio01" align="left" frameborder="0" scrolling ="auto" width="100%" height="800px" 
</iframe>
</iframe>
</body>
</html>
