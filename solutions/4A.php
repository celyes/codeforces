<?php

// 84980704 	Jun/25/2020 17:09:04 celyes 	4A - 8 	PHP 	Accepted 	62 ms 	5888 KB

$handle = fopen ("php://stdin","r");

$w = fgets($handle);

echo $w <= 2 || $w % 2 != 0 ? "NO" : "YES";

fclose($handle);