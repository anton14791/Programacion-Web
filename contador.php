<?php
// While 1-5
$n=1;
while ( $n<= 200 ) {
	echo $n."<br>";
	$n=$n+1;
	if ($n==101) {
		break;
	}
}


//Uso For

for ($i=1; $i <=200 ; $i++) {
	echo $i."<br>";
	if ($i==100) {
		break;
	}

}


//Uso do While
$x=1;
do
{
echo $x."<br>";
if ($x==100) {
		echo "asd";
	break;
}

$x++;

}
while ( $x<= 201)


?>