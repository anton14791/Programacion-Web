<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programa de Billetes</title>
</head>
<body>
<form name="num" action="?" method="post">
  <fieldset>  <legend>Programa de Billetes</legend>
    <p>Ingrese el Sueldo del Trabajador</p>
    <input type="text" name="sueldo" 
    placeholder="">
  </fieldset>
<fieldset> <legend>EFECTUAR</legend>
  <input type="submit" value="Procesar Sueldo">
  <input type="reset" value="Nuevo Sueldo">
 <br><br>


<?php   
if ($_POST) {
$sueldo=$_POST['sueldo'];
echo "Su sueldo es de S/. $sueldo Nuevos Soles y se le entregará: <br><br>";
$b200= floor($sueldo/200);
$sueldo=$sueldo%200;
$b100=floor($sueldo/100);
$sueldo=$sueldo%100;
$b50=floor($sueldo/50);
$sueldo=$sueldo%50;
$b20=floor($sueldo/20);
$sueldo=$sueldo%20;
$b10=floor($sueldo/10);
$sueldo=$sueldo%10;
$m5=floor($sueldo/5);
$sueldo=$sueldo%5;
$m2=floor($sueldo/2);
$sueldo=$sueldo%2;
$m1=floor($sueldo/1);
$sueldo=$sueldo%1;

echo $b200 . " Billetes de 200 ".  "<br>";
echo $b100 . " Billetes de 100 ". "<br>";
echo $b50 . " Billetes de 50 ". "<br>";
echo $b20 . " Billetes de 20 ".  "<br>";
echo $b10 . " Billetes de 10 ".  "<br>";
echo $m5 . " Monedas  de 5 ".  "<br>";
echo $m2 . " Monedas  de 2 ".  "<br>";
echo  $m1 . " Monedas  de 1 ". "<br>";
}
?>

</fieldset>
</form>
</body>
</html>