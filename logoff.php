<?php
session_start();
if($_SESSION['Nombres1'])
{
session_destroy();
echo'<script language = javascript>
alert("Serverweb: Gracias por usar el sitio web")
self.location="index.php"</script>';
}
else
{
echo'<script language = javascript>
alert("Serverweb: No se ha iniciado ninguna sesiòn")
blank.location="index.php"</script>';
}
?>