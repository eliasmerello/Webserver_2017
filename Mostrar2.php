<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/view-contact.css">
<link rel="stylesheet" href="/Mis_estilos_CSS/Font/btn.css"> 

<?php require_once('Conexion.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset1 = 15;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($db, $conexion);
$green8= $_POST["cedula"];
$query_Recordset1 = "SELECT * FROM historiales WHERE historiales.Codigo=$green8 ORDER BY Codigo, No DESC";
#$query_Recordset1 = "SELECT * FROM historiales WHERE historiales.Claro=$green8 || historiales.Movistar=$green8";
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
?>
<br><br>
<div id="main-container">
<?php
 echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='btn_1' title='Nuevo Historial' target='medio02' href='New_his.php?No=".$row_Recordset1["No"]." & Codigo=".$row_Recordset1["Codigo"]." & Empresa=".$row_Recordset1["Empresa"]."'>Nuevo Historial</a></td";
?>
<br><br><br>
<center><h1>RESULTADO DE LA CONSULTA</h1></center>
<table>
  <thead>
    <tr>
      <th>Codigo</th>
		  <th>No</span></th>
    	<th>Empresa</th>
    	<th>Fecha_I</th>
    	<th>Modelo</th>
    	<th>Historial</th>
    	<th>Estado</th>
	    <th>Editar</th>
    </tr>
</thead>
  <?php do { ?>
   <tr>
	   <td><?php echo $row_Recordset1['Codigo']; ?></td>
     <td><?php echo $row_Recordset1['No']; ?></td>
     <td><?php echo $row_Recordset1['Empresa']; ?></td>
     <td><?php echo $row_Recordset1['Fecha']; ?></td>
	   <td><?php echo $row_Recordset1['Modelo']; ?></td>
     <td><?php echo $row_Recordset1['Historial']; ?></td>
	   <td><?php echo $row_Recordset1['Estado']; ?></td>
	   <td><a class="btn_1" href="consulta_his.php?Id=<?php echo $row_Recordset1['Id']; ?>" target="medio02">Modificar</a></td>
  </tr>    
<?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>

<table>
  <tr>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">Primero</a>
          <?php } // Show if not first page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Anterior</a>
        <?php } // Show if not first page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Siguiente</a>
         <?php } // Show if not last page ?>
    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
         <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Último</a>
         <?php } // Show if not last page ?>
    </td>
  </tr><br><br><br>

<td>Registros de historiales<?php echo ($startRow_Recordset1 + 1) ?> a <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> de <?php echo $totalRows_Recordset1 ?>
</td>
</table>
<?php
mysql_free_result($Recordset1);
?>