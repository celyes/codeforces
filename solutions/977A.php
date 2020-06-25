<?php 

// 85062144 	Jun/25/2020 18:51UTC+1 	celyes 	A - Wrong Subtraction 	PHP 	Accepted 	31 ms 	5900 KB

$handle = fopen ("php://stdin","r");

$x = explode(" ", fgets($handle));

for($i = 0; $i < $x[1]; $i++){
	($x[0] % 10 == 0) ? $x[0] /= 10 : $x[0]--;
	$x[1]--;
}
echo $x[0];

fclose($handle);