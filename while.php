

<?php

// While
// Hacer un contador del 1 al 10
// $i=1;

$i=1;

While($i<21)
{
echo $i."<br>";
if($i==15) {
	echo "Cortamos el Bucle";
break;
}
$i=$i+2;
}

?>