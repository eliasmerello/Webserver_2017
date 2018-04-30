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
$updateSQL = sprintf("UPDATE historiales SET  No=%s, Empresa=%s, Fecha=%s, Modelo=%s, Historial=%s, Estado=%s   WHERE Id=%s", 
GetSQLValueString($_POST['No'],"text"),
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
<style type="text/css">
<!--
.Estilo4 {font-size: 18px; color: #990000; }
-->
</style>
<style type="text/css">
#borde2{
height:50px;
width::50px;
background: red;
border:3px ridge #000099 ;
border-radius:12px 12px 12px 12px;
}
body {
	background-color: #FFFFFF;
}
.Estilo8 {color: #000066}
</style>

<style type="text/css">
#borde1{
height:60px;
width::50px;
background: #000066;
border:3px ridge #000099 ;
border-radius:12px 12px 12px 12px;
}
</style>

<style type="text/css">
#borde3{
height:60px;
width::50px;
background: #000066;
border:3px ridge #000099 ;
border-radius:12px 12px 12px 12px;
}
.Estilo13 {font-size: 18px}
.Estilo14 {font-size: 24px}
.Estilo15 {font-size: 24}
.Estilo24 {color: #FFFFFF}
.Estilo25 {font-size: 18px; color: #FFFFFF; }
.Estilo26 {font-size: 36px; color: #0000CC; }
.Estilo2 {font-size: 24px; color: #000066; }
</style>
<br>
<div id="borde1"

<p align="center" class="Estilo26">&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" target="_self">
  <table id="borde2"width="438" border="1" align="center">
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap bgcolor="#CCCCCC"><div align="center" class="Estilo2">Actualizar Historial </div></td>
    </tr>
<tr valign="baseline">
      <td width="158" align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">No:</span></strong></span></div></td>
      <td width="260" bgcolor="#CCCCCC"><input type="text" name="No" value="<?php echo $row_Recordset1['No']; ?>" size="43"></td>
    </tr>

    <tr valign="baseline">
      <td align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">Empresa/Compañia:</span></strong></span></div></td>
<td bgcolor="#CCCCCC"><input type="text"name="Empresa" value="<?php echo $row_Recordset1['Empresa']; ?>" size="43"></td>
    </tr>
	
	<tr valign="baseline">
      <td align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">Fecha:</span></strong></span></div></td>
      <td bgcolor="#CCCCCC"><input type="text" name="Fecha" value="<?php echo $row_Recordset1['Fecha']; ?>" size="43"></td>
    </tr>
<tr valign="baseline">
      <td align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">Modelo:</span></strong></span></div></td>
      <td bgcolor="#CCCCCC"><input type="text" name="Modelo" value="<?php echo $row_Recordset1['Modelo']; ?>" size="43"></td>
    </tr>	
<tr valign="baseline">
      <td align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">Historial:</span></strong></span></div></td>
      <td bgcolor="#CCCCCC"><input type="text" name="Historial" value="<?php echo $row_Recordset1['Historial']; ?>" size="43"></td>
    </tr>
<tr valign="baseline">
      <td align="right" nowrap bgcolor="#CCCCCC"><div align="left"><span class="Estilo8 Estilo4"><strong><span class="Estilo8">Estado:</span></strong></span></div></td>
      <td bgcolor="#CCCCCC"><input type="text" name="Estado" value="<?php echo $row_Recordset1['Estado']; ?>" size="43"></td>
    </tr>
	
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap bgcolor="#CCCCCC"><input type="submit" value="Modificar datos">
        <label for="Submit">
      <label for="Submit"></label>    </td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="Id" value="<?php echo $row_Recordset1['Id']; ?>">
  </div>
  <span class="Estilo15">
  <?php
mysql_free_result($Recordset1);
?>
  </span>
</form>
