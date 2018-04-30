<?php
session_start();
session_destroy();
echo'<script language = javascript>
alert("Serverweb: Señor usuario usted ha cerrado su sesiòn correctamente")
blank.location="index.php"</script>';
?>