<?php

$mysqli = new mysqli("localhost", "root", "", "backpack");

if($mysqli->connect_errno) {
	echo "Falló la conexion a la base de datos";
}

return $mysqli;

?>
