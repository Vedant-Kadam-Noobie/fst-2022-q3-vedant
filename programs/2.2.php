<?php

echo"\nEnter the String:";

$handle=fopen("php://stdin","r");
$string=fgets($handle);

echo"\nEnter the Number:";
$number=fgets($handle);

for ($x = 1; $x <= $number; $x++) {
    echo"\n Iteration #".$x."-".$string;
}

?>