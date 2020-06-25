<?php

// 85040309 	Jun/25/2020 17:07UTC+1 	celyes 	71A - Way Too Long Words 	PHP 	Accepted 	31 ms 	5900 KB

$handle = fopen ("php://stdin","r");

$number = (int)trim(fgets($handle));

while($number >= 0){

  $word = trim(fgets($handle));
  $length = strlen($word);
  echo $length > 10 ? $word[0]. ($length - 2) . $word[$length - 1]."\r" : $word."\r";
  $number--;

}

fclose($handle);