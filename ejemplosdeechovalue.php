

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/Tablas3_form_1.css"> 

<title>Factura</title>

</head>
<body>
<h1>greenbsys S.A</h1>

<form id="form1" name="form1" method="post" action="fact.php">

<table width="274" border="0">

  <tr>
    <td><strong>Cantidad</strong></td>
    <td><strong>Servicio/Producto</strong></td>
    <td><strong>Valor Unitario</strong></td>
    <td><strong>Valor</strong></td>  
  </tr>

  <tr>
    <td><input name="cantidad" type="text" id="cant" maxlength="30" autofocus value="<?php echo $_POST['cantidad'];?>" /></td>

    <td><input name="servicio" type="text" id="ser" value="<?php echo $_POST['servicio'];?>" maxlength="30" autofocus /></td>

    <td><input name="valoru" type="text" id="valu" value="<?php echo $_POST['valoru'];?>"  maxlength="30" autofocus /></td>

    <td><input name="valor" type="text" id="val" value="<?php echo $res;?>"  maxlength="30" autofocus /></td>
    
  </tr>

	<tr>
    <td><input name="cantidad1" type="text" id="cant1" value="<?php echo $_POST['cantidad1'];?>"  maxlength="30" autofocus /></td>

    <td><input name="servicio1" type="text" id="ser1" value="<?php echo $_POST['servicio1'];?>" maxlength="30" autofocus /></td>

    <td><input name="valoru1" type="text" id="valu1" value="<?php echo $_POST['valoru1'];?>"  maxlength="30" autofocus /></td>

    <td><input name="valor1" type="text" id="val1" value="<?php echo $res1;?>"  maxlength="30" autofocus /></td>
    
  </tr>
    
</table>

<br><br>

<table width="274" border="0">
    <tr>
      <td><strong>Subtotal:</strong></td>
    </tr> 
    
    <tr>
      <td><input name="sub" type="text" id="sub" value="<?php echo $subtotal;?>"  maxlength="30" autofocus />
      </td>
    </tr>

    <tr>
      <td><strong>IVA 12%:</strong></td>
    </tr>
    
    <tr>
      <td><input name="iva" type="text" id="iva" value="<?php echo $iva;?>" maxlength="30" autofocus />
     </td>
    </tr>

    <tr>
      <td><strong>Total US:</strong></td>
    </tr>
    
    <tr>
      <td><input name="total" type="text" id="tot" value="<?php echo $total;?>"  maxlength="30" autofocus />
      </td>
    </tr>

  </table><br>
        <tr>
            <td><input name="btn_Guardar" type="submit" id="btn_Guardar" value="Calcular total" /></td>
            
        </tr>
     
</form>
  </body>
</html>

