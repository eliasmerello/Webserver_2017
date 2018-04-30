<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/form-client.css"> 
</head>
<?php
session_start();
if(!$_SESSION)
{
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.Vuelva a intentarlo")
self.location="index.php"</script>';
}
$Id_user=$_SESSION['Id_user'];
?>
<?php require_once('Conexion.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
$updateSQL = sprintf("UPDATE historiales SET Empresa=%s, Fecha=%s, Modelo=%s, Historial=%s, Estado=%s  WHERE Id=%s", 
GetSQLValueString($_POST['Empresa'], "text"),
GetSQLValueString($_POST['Fecha'], "text"),
GetSQLValueString($_POST['Modelo'], "text"),
GetSQLValueString($_POST['Historial'], "text"),
GetSQLValueString($_POST['Estado'], "text"),
GetSQLValueString($_POST['Id'], "int"));
  mysql_select_db($db, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());
  $updateGoTo = "Mostrar2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
echo'<script language = javascript>
alert("Serverweb: Datos actualizados correctamente")
self.location="select2.html"</script>';  
}
$colname_Recordset1 = "-1";
if (isset($_GET['Id'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_GET['Id'] : addslashes($_GET['Id']);  
}
mysql_select_db($db, $conexion);
$query_Recordset1 = sprintf("SELECT * FROM historiales WHERE Id = %s", $colname_Recordset1);
$Recordset1 = mysql_query($query_Recordset1, $conexion) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
mysql_free_result($Recordset1);
?>
<html>
<body>
<br>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" target="_self">
<table>
<thead>
<tr>
  <h1>Modificar historial</h1>    
</tr> 
</thead>
  
<tr>
      <td><p>Codigo:</p></td>
      <td><?php echo $row_Recordset1['Codigo']; ?></td>
</tr>

<tr>
      <td><p>No:</p></td>
      <td><?php echo $row_Recordset1['No']; ?></td>
</tr>

<tr>
      <td><p>Empresa/Compañia:</p></td>
      <td><input type="text" name="Empresa" class="caja-texto" value="<?php echo $row_Recordset1['Empresa']; ?>" ></td>
</tr>
  
<tr>
      <td><p>Fecha_I:</p></td>
      <td><input type="text" name="Fecha" class="caja-texto" value="<?php echo $row_Recordset1['Fecha']; ?>" ></td>
</tr>

<tr>
      <td><p>Modelo:</p></td>
      <td><input type="text" name="Modelo" class="caja-texto" value="<?php echo $row_Recordset1['Modelo']; ?>" ></td>
</tr> 
<tr>
      <td><p>Historial:</p></td>
      <td><textarea name="Historial" cols="22" rows="4" class="caja-texto" maxlength="150"> <?php echo $row_Recordset1['Historial']; ?> </textarea></td>
</tr>
<tr>
      <td><p>Estado:</p></td>
      <td><input type="text" name="Estado" class="caja-texto" value="<?php echo $row_Recordset1['Estado']; ?>" ></td>
</tr>
  
<tr>
     <td height="26"><input type="submit" value="Modificar historial">
     <label for="Submit"></label>
     <label for="Submit"></label>
   </td>
</tr>
</table>

  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="Id" value="<?php echo $row_Recordset1['Id']; ?>">
</form>
</body>
</html>