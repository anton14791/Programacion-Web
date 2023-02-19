<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" name="xxx" action="?">
		<table border="1" align="center" bgcolor="black">
			<tr align="left">
				<th>Código </th>
				<td><input type="number" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Nombre y Apellidos </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Edad </th>
				<td><input type="number" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Fecha de Nacimiento </th>
				<td><input type="date" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Dirección </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Cuenta de Email </th>
				<td><input type="Email" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Signo </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Sueldo </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="center">
				<th><input type="submit" name="" value="Registrar"></th>
				<th><input type="reset" name="" value="Cancelar"></th>
			</tr>
		</table>
	</form>
<?php
//Ejemplo de array - 
if($_POST) {
	
$datos=$_POST['datos'];

echo "Mi código es: $datos[0], Mi nombre y apellido es : $datos[1], Mi edad es: $datos[2], Mi fecha de nacimiento es: $datos[3], Mi dirección es: $datos[4], Mi cuenta de email es: $datos[5], Mi signo es: $datos[6], Mi sueldo es: $datos[7]  ";
}


?>
</body>
</html>

