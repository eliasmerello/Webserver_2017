<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/Tablas_1.css"> 
<link rel="stylesheet" href="/Mis_estilos_CSS/Font/font.css"> 
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

$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset1 = 5;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;
mysql_select_db($db, $conexion);
$num_fact= $_POST["num_fact"];
if(!is_numeric($num_fact)){
  echo'<script language = javascript>
  alert("Serverweb: Dato debe ser numerico.")
  parent.location="select_factura.php"</script>';
}
#$query_Recordset1 = "SELECT * FROM datos WHERE datos.Claro=$green8 || datos.Movistar=$green8";
#query_Recordset1 = "SELECT * FROM factura";
$query_Recordset1 = "SELECT * FROM factura WHERE factura.Factura_Num = $num_fact";
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

<table>
  <?php echo"<h1>N&#176; Factura:" . $row_Recordset1['Factura_Num']; ?>
 <thead>
  <?php do { ?>
  <tr>
  <td>Id</td>
  <td>Cliente(s):</td>
  <td>Direcci&oacute;n</td>
  <td>RUC</td>
  <td>Codigo</td>
  <td>Factura</td>
  <td>Fecha</td>
  <td>Ciudad</td>
  <td>Fijo</td>
  <td>Operadora</td>
  <td>N&uacute;mero</td>
  <td>Vendedor</td>
  <td>E-Mail</td>
  </tr>
  </thead>
  
  <td><?php echo $row_Recordset1['Id']; ?></td>
  <td><?php echo $row_Recordset1['Cliente']; ?></td>
  <td><?php echo $row_Recordset1['Direccion']; ?></td>
  <td><?php echo $row_Recordset1['Ruc']; ?></td>
  <td><?php echo $row_Recordset1['Codigo']; ?></td>
  <td><?php echo $row_Recordset1['Factura_Num']; ?></td>
  <td><?php echo $row_Recordset1['Fecha']; ?> </td>
  <td><?php echo $row_Recordset1['Ciudad']; ?> </td>
  <td><?php echo $row_Recordset1['Fijo']; ?> </td>
  <td><?php echo $row_Recordset1['Operadora']; ?></td>
  <td><?php echo $row_Recordset1['Numero']; ?> </td>
  <td><?php echo $row_Recordset1['Vendedor']; ?> </td>
  <td><?php echo $row_Recordset1['Mail']; ?> </td>
 </table>
 
 <table>
 <thead>
 <tr>
    <td><strong>Cantidad</strong></td>
    <td><strong>Servicio/Producto</strong></td>
    <td><strong>Valor Unitario</strong></td>
    <td><strong>Valor</strong></td>  
  </tr>

 <tr>
    <td><input name="cantidad" type="text" class="caja-texto" id="cant" maxlength="30" autofocus value="<?php echo $row_Recordset1['Cantidad']; ?>"/></td>
    <td><input name="servicio" type="text" class="caja-texto" id="ser" size="40"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Servicio']; ?> "/></td>
    <td><input name="valoru" type="text" class="caja-texto" id="valu"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor_Uni']; ?>" /></td>
    <td><input name="valor" type="text" class="caja-texto" id="val"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor']; ?>" /></td>
  </tr>

<tr>
  <td><input name="cantidad1" type="text" class="caja-texto" id="cant1" maxlength="30" autofocus value="<?php echo $row_Recordset1['Cantidad1']; ?>"/></td>
  <td><input name="servicio1" type="text" class="caja-texto" id="ser1" size="40" maxlength="30" autofocus value="<?php echo $row_Recordset1['Servicio1']; ?> "/></td>
  <td><input name="valoru1" type="text" class="caja-texto" id="valu1"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor_Uni1']; ?>" /></td>
  <td><input name="valor1" type="text" class="caja-texto" id="val1"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor1']; ?>" /></td>
</tr>

<tr>
  <td><input name="cantidad2" type="text" class="caja-texto" id="cant2"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Cantidad2']; ?>"/></td>
  <td><input name="servicio2" type="text" class="caja-texto" id="ser2" size="40" maxlength="30" autofocus value="<?php echo $row_Recordset1['Servicio2']; ?> "/></td>
  <td><input name="valoru2" type="text" class="caja-texto" id="valu2"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor_Uni2']; ?>" /></td>
  <td><input name="valor2" type="text" class="caja-texto" id="val2"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor2']; ?>" /></td>
</tr>

<tr>
  <td><input name="cantidad3" type="text" class="caja-texto" id="cant3"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Cantidad3']; ?>"/></td>
  <td><input name="servicio3" type="text" class="caja-texto" id="ser3" size="40" maxlength="30" autofocus value="<?php echo $row_Recordset1['Servicio3']; ?> "/></td>
  <td><input name="valoru3" type="text" class="caja-texto" id="valu3"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor_Uni3']; ?>" /></td>
  <td><input name="valor3" type="text" class="caja-texto" id="val3"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Valor3']; ?>" /></td>
</tr>
<thead>
<tr>
<td><strong>Subtotal:</strong></td>
</tr> 
    
<tr>
<td><input name="subtotal" type="text" class="caja-texto" id="sub"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Subtotal']; ?>" />
</td>
</tr>

<tr>
<td><strong>IVA 12%:</strong></td>
</tr>
    
<tr>
<td><input name="iva" type="text" class="caja-texto" id="iv" maxlength="30" autofocus value="<?php echo $row_Recordset1['Iva']; ?>" />
</td>
</tr>

<tr>
<td><strong>Total US:</strong></td>
</tr>
<tr>
<td><input name="total" type="text" class="caja-texto" id="tot"  maxlength="30" autofocus value="<?php echo $row_Recordset1['Total']; ?>" />
</td>
</tr>
<?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
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
  </tr>
</table>

<td>Registros encontrados:<?php echo ($startRow_Recordset1 + 1) ?> a <?php echo min($startRow_Recordset1 + $maxRows_Recordset1, $totalRows_Recordset1) ?> de <?php echo $totalRows_Recordset1 ?></td>

<?php
mysql_free_result($Recordset1);
?>