<?php

echo"\nEnter a string:";

$handle=fopen("php://stdin","r");
$string=fgets($handle);

echo"\nEnter a number:";
$number=fgets($handle);

for ($x=1; $x <= $number; $x++) { 
    print "\nIteration #".$x."-";
    for ($y=1; $y <= $x; $y++) { 
        print '$s';
    }
}
?>