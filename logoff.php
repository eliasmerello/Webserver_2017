<?php
session_start();
session_destroy();
echo'<script language = javascript>
alert("Serverweb: Se�or usuario usted ha cerrado su sesi�n correctamente")
blank.location="index.php"</script>';
?>