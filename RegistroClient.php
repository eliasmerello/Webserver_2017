<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/form-client.css"> 
<?php
  $Cod= $_GET['Codigo']+1;
?>
<title>Agregar_Cliente</title>
</head>
<body>    
<form id="form1" name="form1" method="post" action="RegistroCliente.php"> 
<table><br>
<thead>
    <tr>
      <h1>Nuevo Cliente</h1>
    </tr>
</thead>
  <tr>
    <td><p>Nombres:</p></td>
    <td><input name="nombres" type="text" class="caja-texto" maxlength="30" autofocus /></td>
  </tr>        
	<tr>
    <td><p>Apellidos:</p></td>
    <td><input name="apellidos" type="text" class="caja-texto" maxlength="30" /></td>
  </tr>          
	<tr>
    <td><p>Codigo:</p></td>
    <td><input name="codigo" type="text" class="caja-texto" value="<?php echo $Cod; ?>"  maxlength="30" /></td>
  </tr>		  
	<tr>
    <td><p>Empresa:</p></td>
    <td><input name="empresa" type="text" class="caja-texto"  maxlength="30" /></td>
  </tr>		  
  <tr>
    <td><p>Direcci&oacute;n:</p></td>
    <td><input name="direccion" type="text" class="caja-texto" maxlength="80" /></td>
  </tr>
  <tr>
    <td><p>Convencional:</p></td>
    <td><input name="fijo" type="text" class="caja-texto" maxlength="10" /></td>
  </tr>	  
	<tr>
    <td><p>Operadora:</p></td>
    <td>
			  <select name="ope" size="1" class="caja-texto">
              <option value="Claro">Claro</option>
              <option value="Movistar">Movistar</option>
              <option value="Twenty">Twenty</option>
			        <option value="CNT">CNT</option>
              <option value="Otra">Otra</option>
        </select>
		</td>
	</tr>		   
	<tr>
    <td><p>N&uacute;mero:</p></td>
    <td><input name="num" type="text" class="caja-texto" maxlength="50" /></td>
  </tr>	   
	<tr>
    <td><p>RUC:</p></td>
    <td><input name="ruc" type="text" class="caja-texto" maxlength="50" /></td>
  </tr>	  
  <tr>
    <td><p>E-mail:</p></td>
    <td><input name="mail" type="text" class="caja-texto" maxlength="50" /></td>
  </tr>
  <tr>
    <td><p><input name="btn_Guardar" type="submit" id="btn_Guardar" value="Guardar" /></p></td>
    <td><p><input name="btn_Limpiar" type="reset" id="btn_Limpiar" value="Borrar" /></p></td>
  </tr>
</table><br>
</form>
</body>
</html>