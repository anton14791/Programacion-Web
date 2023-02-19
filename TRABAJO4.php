<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form name="num" action="?" method="post">
  <fieldset>  <legend>Tabla de Multiplicar</legend>
    <p>Número de tablas que desea Multiplicar</p>
    <input type="text" name="txtt" 
    placeholder="Ingrese el Número">
 <br><br>
  <input type="submit" value="Generar tabla">
  </fieldset>
</form>
<br><br>

<?php   
if ($_POST) {
$tabla=$_POST['txtt'];
for ($i=1; $i <=$tabla ; $i++) { 
  for ($j=1; $j <=12 ; $j++) { 
      echo "$i * $j = ". $i*$j . "<br>";
  }
  echo "<br>";
}
}
 ?>
</body>
</html>