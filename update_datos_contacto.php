<link rel="stylesheet" href="/Mis_estilos_CSS/Agenda/form-contact.css"> 
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
  $updateSQL = sprintf("UPDATE datos SET Nombres=%s, Apellidos=%s, Direccion=%s, Fijo=%s, Operadora=%s, Numero=%s, Mail=%s WHERE Id=%s",
                       
                       GetSQLValueString($_POST['Nombres'], "text"),
                       GetSQLValueString($_POST['Apellidos'], "text"),
                       GetSQLValueString($_POST['Direccion'], "text"),
                       GetSQLValueString($_POST['Fijo'], "text"),
                       GetSQLValueString($_POST['Operadora'], "text"),
                       GetSQLValueString($_POST['Numero'], "text"),
                       GetSQLValueString($_POST['Mail'], "text"),
                       GetSQLValueString($_POST['Id'], "int"));

  mysql_select_db($db, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
	echo'<script language = javascript>
	alert("Serverweb: Datos actualizados correctamnete.")
	self.location="select.php"</script>';
}

$colname_Recordset1 = "-1";
if (isset($_GET['Id'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_GET['Id'] : addslashes($_GET['Id']);
}
mysql_select_db($db, $conexion);
$query_Recordset1 = sprintf("SELECT * FROM datos WHERE Id = %s", $colname_Recordset1);
$Recordset1 = mysql_query($query_Recordset1, $conexion) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<form action="<?php echo $editFormAction; ?>" method="post" name="form1" target="medio">
<table>
  <br>
  <thead>
    <tr>
      <h1>Editar datos del contacto</h1>
    </tr>
  </thead>	
    <tr>
      <td><p>Nombres:</p></td>
      <td><input name="Nombres" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Nombres']; ?>"></td>
    </tr>
	
    <tr>
      <td><p>Apellidos:</p></td>
      <td><input name="Apellidos" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Apellidos']; ?>"></td>
    </tr>
	
    <tr>
      <td><p>Direccion:</p></td>
	  <td><input name="Direccion" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Direccion']; ?>"></td>
    </tr>
	
	  <tr>
      <td><p>Fijo:</p></td>
      <td><input name="Fijo" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Fijo']; ?>"></td>
    </tr>
	
    <tr>
      <td><p>Operadora:</p></td>
      <td><select name="Operadora" class="caja-texto" value="<?php echo $row_Recordset1['Operadora']; ?>" size="1" id="ope">
              <option value="Claro">Claro</option>
              <option value="Movistar">Movistar</option>
              <option value="Twenty">Twenty</option>
              <option value="CNT">CNT</option>
              <option value="Otra">Otra</option>
            </select>	 </td>
    </tr>
    <tr>
      <td><p>N&uacute;mero:</p></td>
      <td><input name="Numero" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Numero']; ?>"></td>
    </tr>
    <tr>
      <td><p>E-Mail:</p></td>
      <td><input name="Mail" type="text" class="caja-texto" value="<?php echo $row_Recordset1['Mail']; ?>"></td>
    </tr>
    <tr>
      <td><input type="submit" value="Editar Datos">
        <label for="Submit">
        <label for="Submit"></label>	  
      </td>
    </tr>
  </table>
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="Id" value="<?php echo $row_Recordset1['Id']; ?>">
</form>
<?php
mysql_free_result($Recordset1);
?>