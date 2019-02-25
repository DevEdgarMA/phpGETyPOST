<?php
	$usuario = $_REQUEST['usuario'];
	$clave = $_REQUEST['clave'];

	if ($usuario == "admin" && $clave == "123") {
		# code...
		echo "Bienvenido al sistema!";
	}
	else{
		echo "El usuario o la clave es incorrecto.";
	}

?>