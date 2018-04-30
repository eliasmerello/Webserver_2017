<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1" />

<?php
     $No= $_GET['No']+1;
     $Cod= $_GET['Codigo'];
     $Emp= $_GET['Empresa'];
?>
<html>
<body>
<link rel="stylesheet" href="/Mis_estilos_CSS/Clientes/form-client.css"> 
<br>
<form method="post" name="form1" action="New_his1.php">
  <table>  
    <thead>
      <tr>
        <h1>Nuevo Historial</h1>    
      </tr> 
    </thead>
	  <tr>
       <td><p>Codigo:</p></td>
       <td><input type="text" name="co" class="caja-texto" required value="<?php echo $Cod; ?>" autofocus /></td>
    </tr>
	  
	  <tr>
       <td><p>No:</p></td>
       <td><input type="text" name="no" class="caja-texto" value="<?php echo $No; ?>" /></td>
    </tr>
	
    <tr>
      <td><p>Empresa:</p></td>
      <td><input type="text" name="empresa" class="caja-texto" value="<?php echo $Emp; ?>" /></td>
    </tr>
	
    <tr>
      <td><p>Fecha:</p></td>
      <td><input type="date" class="caja-texto" name="fecha" /> </td>
    </tr>
	
	  <tr>
      <td><p>Modelo:</p></td>
      <td><input type="text" class="caja-texto" required name="modelo" /></td>
    </tr>
	
	  <tr>
      <td><p>Historial:</p></td>
      <td><textarea name="historial" class="caja-texto" required cols="22" rows="4" maxlength="150" rows="4"></textarea></td>    
	  </tr>
	
	  <tr>
      <td><p>Estado:</p></td>
      <td><input type="text" class="caja-texto" required name="estado" /></td>
    </tr>
	
    <tr>
      <td><input name="submit" type="submit" value="Guardar" />
      <input type="reset" name="Submit" value="Delete" id="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>