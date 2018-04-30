<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/view-contact.css"> 
<link rel="stylesheet" href="/Mis_estilos_CSS/Font/btn.css"> 

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

$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset1 = 5;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
mysql_select_db($db, $conexion);

$green8= $_POST["cedula"]; /*Recibe el valor de la variable por el método POST y la almacena en otra variable "green8"*/

if(!is_numeric($green8)){

  echo'<script language = javascript>
  alert("Serverweb: Dato debe ser numerico.")
  parent.location="select_clientes.php"</script>';
}

#$query_Recordset1 = "SELECT * FROM datos WHERE datos.Claro=$green8 || datos.Movistar=$green8";
$query_Recordset1 = "SELECT * FROM reg_clientes WHERE reg_clientes.Codigo=$green8";
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
//echo "$totalRows_Recordset1";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset1") == false && stristr($param, "totalRows_Recordset1") == false) {
      array_push($newParams, $param);
    }//Fin if
  }//Fin foreach
  if (count($newParams) != 0) {
    $queryString_Recordset1 = "&" . htmlentities(implode("&", $newParams));
  }//Fin if
}//Fin if principal

$queryString_Recordset1 = sprintf("&totalRows_Recordset1=%d%s", $totalRows_Recordset1, $queryString_Recordset1);
?>
<h1>RESULTADO DE LA CONSULTA</h1>
<table>
 <thead>
  <tr>
  <td>Id</td>
  <td>Nombres</td>
  <td>Apellidos</td>
	<td>Codigo</td>
	<td>Empresa</td>
	<td>Direcci&oacute;n</td>
	<td>Fijo</td>
	<td>Operadora</td>
	<td>N&uacute;mero</td>	
	<td>RUC</td>
	<td>E-Mail</td>
	<td>Editar</td>
  </tr>
 </thead> 

  <?php do { ?>
    <tr>
    <td><?php echo $row_Recordset1['Id']; ?></td>
	  <td><?php echo $row_Recordset1['Nombres']; ?></td>
    <td><?php echo $row_Recordset1['Apellidos']; ?></td>
	  <td><?php echo $row_Recordset1['Codigo']; ?></td>
	  <td><?php echo $row_Recordset1['Empresa']; ?></td>
	  <td><?php echo $row_Recordset1['Direccion']; ?></td>
	  <td><?php echo $row_Recordset1['Fijo']; ?> </td>
	  <td><?php echo $row_Recordset1['Operadora']; ?> </td>
	  <td><?php echo $row_Recordset1['Numero']; ?> </td>
	  <td><?php echo $row_Recordset1['RUC']; ?></td>
	  <td><?php echo $row_Recordset1['Mail']; ?> </td>
	  <td><a class="btn_1" href="select_update_clientes.php?Id=<?php echo $row_Recordset1['Id']; ?>" target="medio02">Modificar</a></td>
    </tr>
    <?php ;} while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table> 

<table>
  <tr>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, 0, $queryString_Recordset1); ?>">Primero</a>
          <?php } // Show if not first page ?>    </td>
    <td><?php if ($pageNum_Recordset1 > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, max(0, $pageNum_Recordset1 - 1), $queryString_Recordset1); ?>">Anterior</a>
          <?php } // Show if not first page ?>    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, min($totalPages_Recordset1, $pageNum_Recordset1 + 1), $queryString_Recordset1); ?>">Siguiente</a>
          <?php } // Show if not last page ?>    </td>
    <td><?php if ($pageNum_Recordset1 < $totalPages_Recordset1) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_Recordset1=%d%s", $currentPage, $totalPages_Recordset1, $queryString_Recordset1); ?>">Último</a>
          <?php } // Show if not last page ?>    </td>
  </tr><br><br><br>


<td>Registros encontrados:<?php echo ($startRow_Recordset1 + 1) ?> a <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> de <?php echo $totalRows_Recordset1 ?>
  
</td>
</table>
<?php
mysql_free_result($Recordset1);
?>

