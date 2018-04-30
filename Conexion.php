<?php
$host = "localhost";
$user = "greenbsys";
$pw = ".servidor";
$db = "greenbsys";
$conexion= mysql_connect ($host, $user, $pw) or die("No se puede realizar la conexion con el servidor gbsys.sytes.net_2017");
mysql_select_db("greenbsys",$conexion)or die("Error con la base de datos..");
?>