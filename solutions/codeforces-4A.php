<?php

$handle = fopen ("php://stdin","r");

$w = fgets($handle);

echo $w <= 2 || $w % 2 != 0 ? "NO" : "YES";

fclose($handle);