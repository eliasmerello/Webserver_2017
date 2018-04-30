<link rel="stylesheet" href="/Mis_estilos_CSS/Tablas0.css"> 
<link rel="stylesheet" href="/Mis_estilos_CSS/Font/btn.css"> 

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
mysql_select_db($db, $conexion);
#$query_Recordset1 = "SELECT * FROM datos WHERE datos.Claro=$green8 || datos.Movistar=$green8";
$query_Recordset1 = "SELECT * FROM datos";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $conexion) or die(mysql_error());
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
?><br><br><br>
<table>
<h1>Agenda de contactos <IMG SRC="imagenes/ima1.png"></h1>
 <thead>
  <tr>
    <td>Id</td>
    <td>Nombres</td>
    <td>Apellidos</td>
  	<td>Direcci&oacute;n</td>
  	<td>Convencional</td>
  	<td>Operadora</td>
  	<td>N&uacute;mero</td>	
  	<td>E-Mail</td>
  	<td>Modificar</td>
  </tr>
 </thead> 
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['Id']; ?></td>
	    <td><?php echo $row_Recordset1['Nombres']; ?></td>
      <td><?php echo $row_Recordset1['Apellidos']; ?></td>
  	  <td><?php echo $row_Recordset1['Direccion']; ?></td>
  	  <td><?php echo $row_Recordset1['Fijo']; ?> </td>
  	  <td><?php echo $row_Recordset1['Operadora']; ?> </td>
  	  <td><?php echo $row_Recordset1['Numero']; ?> </td>
  	  <td><?php echo $row_Recordset1['Mail']; ?> </td>
  	  <td><a class="btn_agenda" href="select_update.php?Id=<?php echo $row_Recordset1['Id']; ?>" target="medio">Actualizar</a></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table><br><br> 
<table>
  <tr>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a class="btn_agenda" href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">Primero</a>
          <?php } // Show if not first page ?>    </td>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a class="btn_agenda" href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Anterior</a>
          <?php } // Show if not first page ?>    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a class="btn_agenda" href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Siguiente</a>
          <?php } // Show if not last page ?>    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a class="btn_agenda" href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Último</a>
          <?php } // Show if not last page ?>    </td>
  </tr>
</table>
<br><br>  
<td>Contactos encontrados:<?php echo ($startRow_Recordset1 + 1) ?> a <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> de <?php echo $totalRows_Recordset1 ?></td>
<?php
mysql_free_result($Recordset1);
?>