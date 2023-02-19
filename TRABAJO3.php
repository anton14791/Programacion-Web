<!DOCTYPE html>
<html>
<head> 
    <title>Numeros</title>
</head>
<body>
<form action="?" method="post" name="num">
  <fieldset><legend>Comparar numeros</legend>
   <p>Ingresar numeros</p>
   <input type="text" name="txtnum" placeholder="Numeros">
 <br>
   <input type="submit" value="Comparar">
   <input type="reset" value="Cancelar">
   </fieldset> 
</form>
<?php   
if ($_POST){
$Num=$_POST['txtnum'];
$Div= explode(",",$Num);
$Div2= explode(",",$Num);
$Mayor =$Div[0];
$Menor=$Div2[0];


for ($i=0; $i< count($Div); $i++) { 
    if ($Div[$i]>$Mayor){
      $Mayor=$Div[$i];
     } 
} 

  echo "El numero mayor es : ". $Mayor;
for ($i=0; $i< count($Div2); $i++) { 
    if ($Div2[$i]<$Menor){
      $Menor=$Div2[$i];
     } 
} 
echo "<br>";
  echo "El numero menor es : ". $Menor;
}
?>
</body>
</html>