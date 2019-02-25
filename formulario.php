<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Envio de datos</title>
</head>
<body>
	<form action="procesar.php" method="GET">
		<label>Nombre: </label>
		<input type="text" name="nombre">
		<br>
		<label>Edad: </label>
		<input type="text" name="edad">
		<br>
		<label>Email: </label>
		<input type="Email" name="email">
		<br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>