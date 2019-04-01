<?php
include "config/config.php";
$conexion=mysqli_connect($host_mysqli,$user_mysqli,$pass_mysqli) or die ("error al conectar con el servidor");
$db=mysqli_select_db($conexion, $db_mysqli) or die ("error conectando a la base de datos");
?>