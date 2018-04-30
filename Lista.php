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
<?php require_once('Conexion.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($db, $Conexion);
#$green8= $_POST["cedula"];
/*$query_Recordset1 = "SELECT * FROM datos WHERE datos.Claro=$green8 || datos.Movistar=$green8";*/
$query_Recordset1 = "SELECT * FROM datos";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $Conexion) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$queryString_Recordset1 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && 
        stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<style type="text/css">
<!--
.Estilo6 {
	color: #0099CC;
	font-weight: bold;
}
.Estilo7 {color: #FFFFFF}
.Estilo9 {font-size: 18px}
.Estilo10 {color: #000000}
-->
</style>
<br>
<table width="auto" align="left">
  <tr align="center" valign="middle" bordercolor="#FFFFFF" bgcolor="#0099CC" >
    <td width="30" bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Id</span></p></td>
    <td width="100" bordercolor="#FFFFFF"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Nombres</span></p></td>
    <td width="100"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Apellidos</span></p></td>
<td width="200"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Direcci&oacute;n</span></p></td>
<td width="15"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Convencional</span></p></td>
<td width="30"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">Operadora</span></p></td>
<td width="30"  bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">N&uacute;mero</span></p></td>	
<td width="30" bgcolor="#0099CC">      <p align="center" class="Estilo7"><span class="Estilo9">E-Mail</span></p></td>
<td width="75"  bgcolor="#0099CC"><div align="center" class="Estilo16 Estilo9 Estilo7">	  
<p align="center"><strong>Modificar</strong></p>
    </div></td>
  </tr>
  <?php do { ?>
  
    <tr bgcolor="#fffffff">
      <td width="30" height="42" align="center" valign="middle" bgcolor="#336699"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Id']; ?>&nbsp; </p>
      </div></td>
	  <td width="120" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Nombres']; ?>&nbsp; </p>
      </div></td>
	  
      <td width="100" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Apellidos']; ?>&nbsp; </p>
      </div></td>
	  <td width="260" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Direccion']; ?>&nbsp; </p>
      </div></td>
	  
	   <td width="110" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Fijo']; ?>&nbsp; </p>
      </div></td>
	  
	  <td width="100" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Operadora']; ?>&nbsp; </p>
      </div></td>
	  <td width="30" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Numero']; ?>&nbsp; </p>
      </div></td>
	  <td width="75" align="center" valign="middle"><div align="left" class="Estilo10">
        <p><?php echo $row_Recordset1['Mail']; ?>&nbsp; </p>
      </div></td>
	  
	  
	  <td width="85" align="center" valign="middle"><div align="left" class="Estilo10">
	    <p><a href="select_update.php?Id=<?php echo $row_Recordset1['Id']; ?>" target="medio">Actualizar</a></p>
	  </div></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<blockquote>
  <blockquote>
    <p><br>
    </p>
    <p>&nbsp;</p>
  </blockquote>
</blockquote>
<table border="0" width="50%" align="center">
  <tr>
    <td width="23%" align="center"><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">Primero</a>
          <?php } // Show if not first page ?>    </td>
    <td width="31%" align="center"><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Anterior</a>
          <?php } // Show if not first page ?>    </td>
    <td width="23%" align="center"><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Siguiente</a>
          <?php } // Show if not last page ?>    </td>
    <td width="23%" align="center"><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Último</a>
          <?php } // Show if not last page ?>    </td>
  </tr>
</table>
<blockquote>
  <blockquote>
    <p>&nbsp;</p>
  </blockquote>
</blockquote>

<div align="left">
  
<p><span class="Estilo6">Registros encontrados:</span> <?php echo ($startRow_Recordset1 + 1) ?> a <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> de <?php echo $totalRows_Recordset1 ?>
        
<?php
mysql_free_result($Recordset1);
?>
</p>  
</div>
