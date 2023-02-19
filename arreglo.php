<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" name="xxx" action="?">
		<table border="1" align="center" bgcolor="black">
			<tr align="left">
				<th>Datos Personales </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Dirección </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Número de Celular </th>
				<td><input type="text" name="datos[]"></td>
			</tr>
			<tr align="left">
				<th>Cuenta de Email </th>
				<td><input type="Email" name="datos[]"></td>
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

echo "Mi nombre es: $datos[0], Vivo en : $datos[1], Mi celular es: $datos[2] y Mi cuenta de email es: $datos[3] ";
}


?>
</body>
</html>

