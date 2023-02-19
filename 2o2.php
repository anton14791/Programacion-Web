<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="black">
	<form action="?" method="post" name="xxx">
		<table border="1" align="center">

			<tr>
				<th>Ingrese su Nombre:</th>
				<td><input type="text" name="txtnom" placeholder="Nombre"></td>
			</tr>

			<tr align="center">
				<td><input type="submit" name="" value="Procesar"></td>
				<td><input type="reset" name="" value="Cancelar"></td>
			</tr>

		</table>
	</form>

</body>
</html>



<?php
$nombre=$_REQUEST['txtnom'];
if ($nombre=="") {
	echo "Tú no tienes Nombre";
} 

elseif ($nombre=="alex")

{
	echo "Tú no tienes Alex";
}

else{
	echo "Tú nombre es $nombre";
}

?>
