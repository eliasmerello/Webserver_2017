<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/Mis_estilos_CSS/factura.css"> 
<link rel="stylesheet" href="/Mis_estilos_CSS/Font/btn.css"> 
<link rel="stylesheet" href="/Mis_estilos_CSS/Agenda/form-contact.css"> 


<title>Crear Factura</title>
</head>
<body>
<script>
 function fncMultiplicar(){
 caja= document.forms["form1"].elements;
 var cantidad = Number(caja["cantidad"].value);
 var valoru = Number(caja["valoru"].value);
 var cantidad1 = Number(caja["cantidad1"].value);
 var valoru1 = Number(caja["valoru1"].value);
 var cantidad2 = Number(caja["cantidad2"].value);
 var valoru2 = Number(caja["valoru2"].value);
 var cantidad3 = Number(caja["cantidad3"].value);
 var valoru3 = Number(caja["valoru3"].value);
 
 valor=cantidad*valoru;
 valor1=cantidad1*valoru1;
 valor2=cantidad2*valoru2;
 valor3=cantidad3*valoru3;

 if(!isNaN(valor)&&!isNaN(valor1)&&!isNaN(valor2)&&!isNaN(valor3)){
  caja["valor"].value=cantidad*valoru;
  caja["valor1"].value=cantidad1*valoru1;
  caja["valor2"].value=cantidad2*valoru2;
  caja["valor3"].value=cantidad3*valoru3;
   }
} 
</script>

<script>
function fncCalcular1(){
caja= document.forms["form1"].elements;  
var subtotal = Number(caja["subtotal"].value);
var iva = Number(caja["iva"].value);
var total = Number(caja["total"].value);
subtotal=valor+valor1+valor2+valor3;
iva = subtotal*0.12;
total = subtotal+iva;
if (!isNaN(subtotal)&&!isNaN(iva)&&!isNaN(total)) {
caja["subtotal"].value=valor+valor1+valor2+valor3;
caja["iva"].value=subtotal*0.12;
caja["total"].value=subtotal+iva; 
 }
}
</script>


<form id="form1" name="form1" method="post" action="generar_fact.php">
<table>
  <h1>GBSYS S.A</h1><br><br>
	  <tr>
        <td>Cliente(s):</td>
        <td><input name="nombres" type="text" class="caja-texto" maxlength="30" autofocus /></td>
        <td>Direcci&oacute;n:</td>
        <td><input name="direccion" type="text" class="caja-texto" maxlength="60" /></td>
    
        <td>RUC:</td>
        <td><input name="ruc" type="text" class="caja-texto" maxlength="10" /></td>
    
        <td>C&oacute;digo:</td>
        <td><input name="codigo" type="text" class="caja-texto"  maxlength="3" /></td>
      </tr>
   
    <tr>
        <td>N&uacute;mero_Factura:</td>
        <td><input name="factura" type="text" class="caja-texto" maxlength="6" /></td>
    
        <td>Fecha:</td>
        <td><input type="date" class="caja-texto" name="fecha" /> </td>
    
        <td>Ciudad:</td>
        <td><input name="ciudad" type="text" class="caja-texto" maxlength="10" /></td>
  
        <td>Telef&oacute;no:</td>
        <td><input name="fijo" type="text" class="caja-texto" maxlength="10" /></td>
    </tr>
  
    <tr>
        <td>Operadora:</td>
        <td>
	        <select name="ope" size="1" id="ope" class="caja-texto">
            <option value="Claro">Claro</option>
            <option value="Movistar">Movistar</option>
            <option value="Twenty">Twenty</option>
	          <option value="CNT">CNT</option>
            <option value="Otra">Otra</option>
          </select>
	     </td>
	
       <td>N&uacute;mero:</td>
       <td><input name="num" type="text" class="caja-texto" maxlength="10"/></td>
  
       <td>Vendedor de producto/Servicio:</td>
       <td><input name="vendedor" type="text" class="caja-texto" maxlength="50" /></td>
  
       <td>E-mail:</td>
       <td><input name="mail" type="text" class="caja-texto" maxlength="40" /></td>
    </tr>

<table>
<thead>
  <tr>
    <td><strong><h1>Cantidad</h1></strong></td>
    <td><strong><h1>Servicio/Producto</h1></strong></td>
    <td><strong><h1>Valor Unitario</h1></strong></td>
    <td><strong><h1>Valor</strong></h1></td>  
  </tr>
</thead><br>
  <tr>
    <td><input name="cantidad" type="text" class="caja-texto" id="cant1"  maxlength="3" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="servicio" type="text" class="caja-texto" id="ser1" size="40" maxlength="30" autofocus /></td>
    <td><input name="valoru" type="text" class="caja-texto" id="valu1"  maxlength="30" placeholder="$" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="valor" type="text" class="caja-texto" id="val1"  maxlength="30" placeholder="$" autofocus /></td>
  </tr>

  <tr>
    <td><input name="cantidad1" type="text" class="caja-texto" id="cant1"  maxlength="30" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="servicio1" type="text" class="caja-texto" id="ser1" size="40" maxlength="30" autofocus /></td>
    <td><input name="valoru1" type="text" class="caja-texto" id="valu1"  maxlength="30" placeholder="$" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="valor1" type="text" class="caja-texto" id="val1"  maxlength="30" placeholder="$" autofocus /></td>
  </tr>

  <tr>
    <td><input name="cantidad2" type="text" class="caja-texto" id="cant2"  maxlength="30" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="servicio2" type="text" class="caja-texto" id="ser2" size="40" maxlength="30" autofocus /></td>
    <td><input name="valoru2" type="text" class="caja-texto" id="valu2"  maxlength="30" placeholder="$" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="valor2" type="text" class="caja-texto" id="val2"  maxlength="30" placeholder="$" autofocus /></td>
  </tr>

  <tr>
    <td><input name="cantidad3" type="text" class="caja-texto" id="cant3"  maxlength="30" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="servicio3" type="text" class="caja-texto" id="ser3" size="40" maxlength="30" autofocus /></td>
    <td><input name="valoru3" type="text" class="caja-texto" id="valu3"  maxlength="30" placeholder="$" autofocus onkeyup="fncMultiplicar()" /></td>
    <td><input name="valor3" type="text" class="caja-texto" id="val3"  maxlength="30" placeholder="$" autofocus /></td>
  </tr>
<thead>
    <tr>
      <td><strong><h1>Subtotal:</h1></strong></td>
      <td><input name="subtotal" type="text" class="caja-texto" id="sub"  maxlength="30" placeholder="$" onkeyup="fncCalcular1()" autofocus />
      </td>
     </tr>
    <tr>    
      <td><strong><h1>IVA 12%:</h1></strong></td>
      <td><input name="iva" type="text" class="caja-texto" id="iv" maxlength="30" placeholder="$" autofocus onkeyup="fncCalcular1()" />
      </td>
    </tr>
    <tr>
      <td><strong><h1>Total US:</h1></strong></td>   
      <td><input name="total" type="text" class="caja-texto" id="tot"  maxlength="30" placeholder="$" autofocus onkeyup="fncCalcular1()" />
      </td>
    </tr>
 </thead> 
    
</table><br>
    <tr>
        <td><input name="btn_Guardar" class="caja-texto" type="submit" id="btn_Guardar" value="Crear Factura" /></td>
        <td><input name="btn_Limpiar" class="caja-texto" type="reset" id="btn_Limpiar" value="Borrar" /></td>
    </tr>
</table><br>
</form>
</body>
</html>

