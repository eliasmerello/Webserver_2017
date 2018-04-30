<?php
session_start();
if(!$_SESSION)
{
echo'<script language = javascript>
alert("Serverweb: Usuario no autenticado.Vuelva a intentarlo")
self.location="Inicios.php"</script>';
   #header("Location:formulario_re.php");
}
$Id_user=$_SESSION['Id_user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pageg8</title>
<script language="JavaScript">
<!--

function mmLoadMenus() {
  if (window.mm_menu_1112142828_0) return;
                                                        window.mm_menu_1112142828_0 = new Menu("root",116,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112142828_0.addMenuItem("Inicio","window.open('Formulario_re.php', '_parent');");
  mm_menu_1112142828_0.addMenuItem("Cerrar&nbsp;Sesiòn","window.open('/logoff.php', '_self');");
   mm_menu_1112142828_0.fontWeight="bold";
   mm_menu_1112142828_0.hideOnMouseOut=true;
   mm_menu_1112142828_0.bgColor='#000066';
   mm_menu_1112142828_0.menuBorder=2;
   mm_menu_1112142828_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112142828_0.menuBorderBgColor='#FFFFFF';
  window.mm_menu_1112143254_0 = new Menu("root",104,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112143254_0.addMenuItem("Información","window.open('Mision.html', 'medio');");
   mm_menu_1112143254_0.fontWeight="bold";
   mm_menu_1112143254_0.hideOnMouseOut=true;
   mm_menu_1112143254_0.bgColor='#000066';
   mm_menu_1112143254_0.menuBorder=2;
   mm_menu_1112143254_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112143254_0.menuBorderBgColor='#FF9933';
window.mm_menu_1112143440_0 = new Menu("root",182,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112143440_0.addMenuItem("Informaciòn_Webmaster","window.open('/Info_Disenador.php', '_self');");
   mm_menu_1112143440_0.fontWeight="bold";
   mm_menu_1112143440_0.hideOnMouseOut=true;
   mm_menu_1112143440_0.bgColor='#000066';
   mm_menu_1112143440_0.menuBorder=2;
   mm_menu_1112143440_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112143440_0.menuBorderBgColor='#FF9933';
    window.mm_menu_1112143636_0 = new Menu("root",178,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112143636_0.addMenuItem("Informaciòn","window.open('Info_wt.php', '_self');");
  mm_menu_1112143636_0.addMenuItem("Herramientas&nbsp;de&nbsp;trabajo","window.open('Registro_wt1.php', '_self');");
   mm_menu_1112143636_0.fontWeight="bold";
   mm_menu_1112143636_0.hideOnMouseOut=true;
   mm_menu_1112143636_0.bgColor='#000066';
   mm_menu_1112143636_0.menuBorder=2;
   mm_menu_1112143636_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112143636_0.menuBorderBgColor='#FF9933';
window.mm_menu_1112151552_0 = new Menu("root",65,20,"",14,"#990000","#FF6600","#FFFF99","#FFFF99","center","middle",3,0,100,-5,7,true,true,true,0,true,true);
  mm_menu_1112151552_0.addMenuItem("Iniciar","window.open('Registro_wt.php', 'medio');");
   mm_menu_1112151552_0.fontWeight="bold";
   mm_menu_1112151552_0.hideOnMouseOut=true;
   mm_menu_1112151552_0.bgColor='#000066';
   mm_menu_1112151552_0.menuBorder=2;
   mm_menu_1112151552_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112151552_0.menuBorderBgColor='#FF9933';

                      window.mm_menu_1112161215_0 = new Menu("root",141,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112161215_0.addMenuItem("Servicios&nbsp;","window.open('Info_db.php', '_self');");
  mm_menu_1112161215_0.addMenuItem("Consulta&nbsp;de&nbsp;datos","window.open('select.html', '_self');");
   mm_menu_1112161215_0.fontWeight="bold";
   mm_menu_1112161215_0.hideOnMouseOut=true;
   mm_menu_1112161215_0.bgColor='#000066';
   mm_menu_1112161215_0.menuBorder=2;
   mm_menu_1112161215_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112161215_0.menuBorderBgColor='#FF9933';
window.mm_menu_1112161728_0 = new Menu("root",188,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1112161728_0.addMenuItem("Informaciòn","window.open('Info_Doc.php', '_self');");
  mm_menu_1112161728_0.addMenuItem("Documentos&nbsp;de&nbsp;Descarga","window.open('Servergreenb1.html', '_self');");
   mm_menu_1112161728_0.fontWeight="bold";
   mm_menu_1112161728_0.hideOnMouseOut=true;
   mm_menu_1112161728_0.bgColor='#000066';
   mm_menu_1112161728_0.menuBorder=2;
   mm_menu_1112161728_0.menuLiteBgColor='#FFFF33';
   mm_menu_1112161728_0.menuBorderBgColor='#FF9933';
window.mm_menu_1113154943_0 = new Menu("root",104,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1113154943_0.addMenuItem("Informaciòn","window.open('Info_videos.php', '_self');");
  mm_menu_1113154943_0.addMenuItem("Mis&nbsp;Videos","window.open('Videos.html', '_self');");
   mm_menu_1113154943_0.fontWeight="bold";
   mm_menu_1113154943_0.hideOnMouseOut=true;
   mm_menu_1113154943_0.bgColor='#000066';
   mm_menu_1113154943_0.menuBorder=2;
   mm_menu_1113154943_0.menuLiteBgColor='#FFFF33';
   mm_menu_1113154943_0.menuBorderBgColor='#FF9933';
  window.mm_menu_1113164135_0 = new Menu("root",107,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1113164135_0.addMenuItem("Informaciòn","window.open('Info_clientes.php', '_self');");
  mm_menu_1113164135_0.addMenuItem("Mis&nbsp;Clientes","window.open('Update Clientes.html', '_self');");
   mm_menu_1113164135_0.fontWeight="bold";
   mm_menu_1113164135_0.hideOnMouseOut=true;
   mm_menu_1113164135_0.bgColor='#000066';
   mm_menu_1113164135_0.menuBorder=2;
   mm_menu_1113164135_0.menuLiteBgColor='#FFFF33';
   mm_menu_1113164135_0.menuBorderBgColor='#FF9933';
    window.mm_menu_1113170931_0 = new Menu("root",114,22,"",16,"#CCFF00","#000000","#000000","#CCFF00","center","middle",3,0,100,-5,7,true,false,true,0,true,true);
  mm_menu_1113170931_0.addMenuItem("Informaciòn","window.open('Info_pensa.php', '_self');");
  mm_menu_1113170931_0.addMenuItem("Pensamientos","window.open('Pensamientos de reflexion.html', '_self');");
   mm_menu_1113170931_0.fontWeight="bold";
   mm_menu_1113170931_0.hideOnMouseOut=true;
   mm_menu_1113170931_0.bgColor='#000066';
   mm_menu_1113170931_0.menuBorder=2;
   mm_menu_1113170931_0.menuLiteBgColor='#FFFF33';
   mm_menu_1113170931_0.menuBorderBgColor='#FF9933';
window.mm_menu_1113174207_0 = new Menu("root",77,20,"",14,"#990000","#FF6600","#FFFF99","#FFFF99","center","middle",3,0,100,-5,7,true,true,true,0,true,true);
  mm_menu_1113174207_0.addMenuItem("Ingresar","window.open('Insertar.html', '_self');");
   mm_menu_1113174207_0.fontWeight="bold";
   mm_menu_1113174207_0.hideOnMouseOut=true;
   mm_menu_1113174207_0.bgColor='#000066';
   mm_menu_1113174207_0.menuBorder=2;
   mm_menu_1113174207_0.menuLiteBgColor='#FFFF33';
   mm_menu_1113174207_0.menuBorderBgColor='#FF9933';

  
      
  mm_menu_1113174207_0.writeMenus();
} // mmLoadMenus()

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
#borde1{
height:50px;
width::50px;
border:10px solid #000099 ;
border-radius:15px 10px 15px 10px;
}
</style>

<style type="text/css">
#borde2{
height:50px;
width::50px;
border:5px solid #FFFFFF ;
border-radius:15px 10px 15px 10px;
}
</style>

<style type="text/css">
#borde3{
	height:50px;
width::50px;
	border:5px solid #FFFFFF;
	border-radius:15px 10px 15px 10px;
	width: 1155px;
}
</style>

<style type="text/css">
#borde4{
	height:50px;
width::50px;
	border:5px solid #FFFFFF;
	border-radius:15px 10px 15px 10px;
	width: 1155px;
}
</style>

<script language="JavaScript" src="mm_menu.js"></script>
<style type="text/css">
<!--
.Estilo4 {font-size: 24px}
.Estilo102 {color: #FFFFFF; font-weight: bold; }
.Estilo89 {color: #FFFFFF}
.Estilo109 {
	color: #FFFF99;
	font-size: 24px;
}
body {
	background-color: #FFFFFF;
	background-image: url(page11.jpeg);
}
#Layer1 {
	position:absolute;
	width:189px;
	height:29px;
	z-index:1;
	left: 472px;
	top: 359px;
}
#Layer2 {
	position:absolute;
	width:49px;
	height:33px;
	z-index:1;
	left: 342px;
	top: 356px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.Estilo113 {
	color: #99FF00;
	font-style: italic;
	font-weight: bold;
	font-size: 18px;
}
.Estilo117 {color: #000099; font-size: 18px; font-style: italic; }
.Estilo118 {color: #0000CC}
.Estilo133 {font-size: 18px}
.Estilo134 {color: #FF9900}
.Estilo135 {color: #0000CC; font-size: 18px; }
.Estilo139 {color: #0066FF}
.Estilo140 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
-->
</style>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="1144" height="347" border="1" align="center" bgcolor="# blue" id="borde1">
  <tr>
    <td width="1134" background="b5 - gris.gif" bgcolor="#FFFFFF" ><embed src="/Flash_logo.swf" width="1135" height="183" bgcolor="#FFFFFF"></embed></td>
  </tr>
  <tr>
    <td height="53" bgcolor="#000066"><p class="Estilo109"><span class="Estilo89">
      <marquee>
      <strong>Todo lo puedo en cristo que me fortalezco. Filipenses 4:13</strong>
      </marquee>
    </span></p>    </td>
  </tr>
  <tr>
    <td height="87" bgcolor="#000000"><table width="973" height="53" border="1" align="center">
        <tr>
          <td width="130"><em><em><em><img src="/Botones/Btn_inicio.png" alt="Inicio" name="image1" width="110" height="35" class="Estilo107" id="image1" onmouseover="MM_showMenu(window.mm_menu_1112142828_0,0,45,null,'image1')" onmouseout="MM_startTimeout();" /></em></em></em></td>
          <td width="133"><em><em><em><img src="/Botones/Btn_Mision.png" alt="Misi&ograve;n" name="image2" width="110" height="35" id="image2" onmouseover="MM_showMenu(window.mm_menu_1112143254_0,0,45,null,'image2')" onmouseout="MM_startTimeout();" /></em></em></em></td>
          <td width="130"><em><em><span class="Estilo4"><img src="/Botones/Btn3_webmaster.png" alt="Webmaster" name="image3" width="110" height="35" id="image3" onmouseover="MM_showMenu(window.mm_menu_1112143440_0,0,45,null,'image3')" onmouseout="MM_startTimeout();" /></span></em></em></td>
          <td width="130"><em><em><img src="/Botones/Herramientas.png" alt="tools" name="image4" width="110" height="35" border="0" id="image4" onmouseover="MM_showMenu(window.mm_menu_1112143636_0,0,45,null,'image4')" onmouseout="MM_startTimeout();" /></em></em></td>
          <td width="130"><em><span class="Estilo4"><img src="/Botones/Btn_videos.png" alt="Videos" name="image7" width="110" height="35" id="image7" onmouseover="MM_showMenu(window.mm_menu_1113154943_0,0,45,null,'image7')" onmouseout="MM_startTimeout();" /></span></em></td>
          <td width="131"><span class="Estilo42"><img src="/Botones/Servicios.png" alt="Contactos" name="image5" width="110" height="35" class="Estilo4" id="image5" onmouseover="MM_showMenu(window.mm_menu_1112161215_0,0,45,null,'image5')" onmouseout="MM_startTimeout();" /></span></td>
          <td width="79"><span class="Estilo42"><img src="/Botones/Btn_clientes.png" alt="Clientes" name="image8" width="110" height="35" id="image8" onmouseover="MM_showMenu(window.mm_menu_1113164135_0,0,45,null,'image8')" onmouseout="MM_startTimeout();" /></span></td>
          <td width="21"><span class="Estilo42"><img src="/Botones/Btn_pensamientos.png" alt="Pensamientos" name="image9" width="110" height="35" id="image9" onmouseover="MM_showMenu(window.mm_menu_1113170931_0,0,45,null,'image9')" onmouseout="MM_startTimeout();" /></span></td>
          <td width="31"><em><span class="Estilo4"><img src="/Botones/Btn_doc.png" alt="Descarga" name="image6" width="110" height="35" id="image6" onmouseover="MM_showMenu(window.mm_menu_1112161728_0,0,45,null,'image6')" onmouseout="MM_startTimeout();" /></span></em></td>
        </tr>
      </table>
  </tr>
</table>
<table width="1148" border="2" align="center" bgcolor="# blue" id="borde2">
  <tr bgcolor="#FFFFFF">
    <td width="1138" bordercolor="#0000FF" bgcolor="#FFFFFF"><div align="right">
      <blockquote>
        <p><span class="Estilo117 Estilo4 Estilo118"><span class="Estilo135">Bienvenido:</span></span><span class="Estilo113 Estilo4 Estilo118"><span class="Estilo133 Estilo134"> <?php echo $_SESSION['Usuario3'];?></span></span></p>
      </blockquote>
    </div>
    <blockquote>
      <p align="right"><span class="Estilo117 Estilo118 Estilo133 Estilo118"><a href="logoff.php" title="Cerrar sesiòn">Cerrar sesi&ograve;n</a></span></p>
      </blockquote>
      <table width="1141" border="1" align="center" bordercolor="#0000CC" bgcolor="#000066">
      <tr bordercolor="#000099">
        <td width="99" height="42" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="Pagedb1.html" title="ftp8" target="medio" class="Estilo139">Registrate</a></div></td>
        <td width="89" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="form1.html" title="Subir archivo." target="medio" class="Estilo139">Subir archivo</a></div></td>
        <td width="62" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="ftp://192.168.0.2/" title="ftp8" target="medio" class="Estilo139">Ftp8</a></div></td>
        <td width="99" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="Curr&iacute;culum_Update.docx" title="Descargar curriculum vitae" class="Estilo139">Descargar C.V</a></div></td>
        <td width="85" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="https://login.microsoftonline.com/" title="Outlook" target="_blank" class="Estilo139">Office 365 </a><a href="Curr&iacute;culum_Update.docx" title="Descargar curriculum vitae" class="Estilo139"></a></div></td>
        <td width="96" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="Mis Fotos.html" title="ftp8" target="medio" class="Estilo139">Mis fotos</a></div></td>
        <td width="87" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://speedtest.cnt-grms.com.ec/" title="Test de velociddad" target="medio" class="Estilo139">Test de velocidad</a></div></td>
        <td width="93" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://www.cisco-espol.info/" title="Acad&egrave;mia Cisco system_Espol" target="medio" class="Estilo139">Cisco - Espol</a></div></td>
        <td width="105" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://www.cisc.ug.edu.ec/" title="Carrera de ing en sistemas y networking" target="medio" class="Estilo139">C.I.S.C - C.I.N.T</a></div></td>
        <td width="83" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://200.110.68.231:8080/ciscAcademico/paginaLogin" title="ftp8" target="medio" class="Estilo139">Sistema Acad&eacute;mico</a></div></td>
        <td width="87" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://cisc.ug.edu.ec/cisc/" title="Noticias y publicaciones" target="medio" class="Estilo139">Publicaciones</a></div></td>
        <td width="85" background="b5 - black.gif" bgcolor="#000000"><div align="center"><a href="http://oasis.cisc-ug.org/pages1/portada.htm" title="Asosiaci&ograve;n estudiantil O.@.S.I.S" target="medio" class="Estilo139">O.@.S.I.S</a></div></td>
      </tr>
    </table>
	<iframe src="Welcome.html"name="medio" frameborder="0" scrolling="auto" width="1140" height="910" 
     </iframe>
      </iframe>
      </td>
</tr>
<table width="472" border="3" align="center" bgcolor="# blue" id="borde3">
  <tr>
    <td height="99" bordercolor="#0000FF" bgcolor="#000033"><blockquote>
            <p align="center" class="Estilo140">Cont&aacute;ctenos</p>
            <p><span class="Estilo102">Contacto: Alberto Merello Cruz. </span></p>
            <p align="left" class="Estilo102">Fijo: <img src="/icono_tlfono.jpg" alt="fijo" width="40" height="26" /> (04)3080679. </p>
            <p align="left" class="Estilo102">Movil: <img src="/icono_celular.jpg" alt="celular" width="39" height="25" /> 0990688425.</p>
            <p align="left" class="Estilo102">E-mail: <img src="/icono_mail.jpg" alt="mail" width="40" height="25" /><a href="mailto:albertomerello_8@hotmail.com"> albertomerello_8@hotmail.com</a> </p>
            <p align="left" class="Estilo89">S&Iacute;GANOS EN: </p>
            <p align="left"><a href="https://www.facebook.com/pages/Greenb8/678305558868613?ref=hl" target="_parent"><img src="/Botones/facebook2.png" alt="Facebook" width="43" border="0" /></a></p>
            <p align="center"><span class="Estilo89">&iquest;Donde estamos?</span></p>
          </blockquote>
          <p align="center" class="Estilo102">
            <iframe width="350" height="150" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="https://maps.google.com.ec/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=ciudadela+martha+roldos&amp;aq=&amp;sll=-2.143293,-79.921846&amp;sspn=0.002905,0.005284&amp;ie=UTF8&amp;hq=ciudadela+martha+roldos&amp;hnear=&amp;t=m&amp;ll=-2.140634,-79.92425&amp;spn=0.01501,0.006437&amp;z=15&amp;output=embed"></iframe>
          </p>          <blockquote>
            <p align="center" class="Estilo102"><small><a href="https://maps.google.com.ec/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=ciudadela+martha+roldos&amp;aq=&amp;sll=-2.143293,-79.921846&amp;sspn=0.002905,0.005284&amp;ie=UTF8&amp;hq=ciudadela+martha+roldos&amp;hnear=&amp;t=m&amp;ll=-2.140634,-79.92425&amp;spn=0.01501,0.006437&amp;z=15" style="color:#FFFFFF;text-align:left">Full screen</a></small></p>
      </blockquote></td>
  </tr>
</table>
<table width="239" border="4" align="center" bgcolor="#orange" id="borde4">
  <tr>
    <td height="46" bordercolor="#0000FF" bgcolor="#FFFFFF"><div align="right">
      
        <p><em>Derechos exclusivos de<span class="Estilo110"> Orange</span>sys</em></p>
      
    </div></td>
  </tr>
</table>
</body>
</head>
</html>