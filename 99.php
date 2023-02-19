<!DOCTYPE html>
<html>
<head>
	<title>Crear tabla con filas y columnas</title>
</head>
<body>
	<form method="post" name="xxx" action="?">
		<table border="1" align="center" bgcolor="black">
				<th>COLUMNAS </th>
				<td><input type="number" name="txtn" placeholder="">
			</tr>
			<tr align="left">
				<th>FILAS </th>
				<td><input type="number" name="txtn" placeholder="">
			</tr>

   			<tr align="center">
				<th><input type="submit" name="" value="Generar Tabla"></th>
				<th><input type="reset" name="" value="Cancelar"></th>
			</tr>


</table>
	</form>

	
<?php   
if ($_POST) {
$a=$_POST['txtn'];
$v = explode(",", $a);
$b = explode(",", $a);

$mayor = $v[0];
$menor = $b[0];

for ($i=0; $i < count($v); $i++) { 
    if ($v[$i]>$mayor) {
      $mayor=$v[$i];
    }

 }

  echo "El nùmero mayor es: ". $mayor;

 for ($i=0; $i < count($b); $i++) { 
    if ($b[$i]<$menor) {
      $menor=$b[$i];
    }
}
echo "<br>";
  echo "El número menor es : ".$menor;


}
 ?>
</body>
</html>