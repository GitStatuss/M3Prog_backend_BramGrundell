<?php 

include_once "returncalc.php";  
include_once "macht2.php";  

echo "ik heb de comment met /*tekens*/ gedaan<br><br>";

$getal01 = 60;
$getal02 = 40;
$result0 = $getal01 + $getal02; 
echo "$result0<br>"; 

$getal11 = 100;
$getal12 = 10;
$result01 = $getal11 - $getal12; 
echo "$result01<br>"; 

$getal21 = 4;
$getal22 = 2;
$result02 = $getal21 / $getal22; 
echo "$result02<br>"; 

$getal31 = 6;
$getal32 = 6;
$result03 = $getal31 * $getal32; 
echo "$result03<br><br>"; 

//macht

$getal0010 = 2;
$result000 = macht($getal0010);
echo "$result000<br>";

$getal001 = 16;
$result00 = macht($getal001);
echo "$result00<br>";

$getal011 = 100;
$result001 = macht($getal011);
echo "$result001<br>";
?>