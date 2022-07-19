<?php
echo"\nYear of Birth:";

$handle=fopen("php://stdin","r");
$year=fgets($handle);

$age=2022-$year;

echo "\nName: Vedant Kadam";
echo "\nCollege: Thadomal Shahani Engineering College";
echo "\nAge: ".$age;

?>