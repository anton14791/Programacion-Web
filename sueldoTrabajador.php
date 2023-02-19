<!DOCTYPE html>
<html>
<head>
	<title>Sueldo del trabajador</title>
</head>
<body bgcolor="#7BE776">
<form action="?" name="sueldo" method="post">
<table align="center" bgcolor="#7BE7D5" border="3" bordercolor="red"><caption>Sueldo del trabajador</caption>
	<tr>
		<th>Ingrese el sueldo:</th>
		<td><input type="text" name="txtsueldo" placeholder="Sueldo"></td>
	</tr>

	<tr>
		<th>Ingrese la AFP:</th>
		<td><input type="text" name="txtafp" placeholder="AFP"></td>
	</tr>

	<tr align="center">
		<td><input type="submit" name="" value="Calcular"></td>
		<td><input type="reset" name="" value="Cancelar"></td>

	</tr>


</table>	
</form>

</body>
</html>

<?php
$sueldo=$_REQUEST['txtsueldo'];
$AFP=$_REQUEST['txtafp'];

switch ($AFP) {
	case "Horizonte":
	$descuento=$sueldo*5/100;
	$neto=$sueldo-$descuento;
	echo "Sueldo: ".$sueldo."<br>";
	echo "Descuento: ".$descuento."<br>";
	echo "Neto: ".$neto."<br>";
	break;

	case 'Integra':
		$sueldo;
		$descuento=$sueldo*7/100;
		$neto=$sueldo-$descuento;
		echo "Sueldo: ".$sueldo."<br>";
		echo "Descuento: ".$descuento."<br>";
		echo "Neto: ".$neto."<br>";
		break;

	case 'Rimac':
		$sueldo;
		$descuento=$sueldo*9/100;
		$neto=$sueldo-$descuento;
		echo "Sueldo: ".$sueldo."<br>";
		echo "Descuento: ".$descuento."<br>";
		echo "Neto: ".$neto."<br>";
		break;
}

?>