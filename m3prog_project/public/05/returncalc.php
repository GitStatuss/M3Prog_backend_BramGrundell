<?php
$getal1 = 1;
$getal2 = 2;
function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

$result = add($getal1, $getal2);
echo "$result<br>";

$getal3 = 150;
$getal4 = 50;
function add1($getal3, $getal4){
    $som2 = $getal3 + $getal4;
    return $som2;
}

$result2 = add1($getal3, $getal4);
echo "$result2<br>";

$getal5 = 7;
$getal6 = 6;
function add2($getal5, $getal6){
    $som3 = $getal5 + $getal6;
    return $som3;
}

$result3 = add2($getal5, $getal6);
echo "$result3<br>";

$getal7 = 33;
$getal8 = 33;
function add3($getal7, $getal8){
    $som3 = $getal7 + $getal8;
    return $som3;
}

$result4 = add3($getal7, $getal8);
echo "$result4<br>";



echo "<br>";



function subtract1($getal3, $getal4){
    $som2 = $getal3 - $getal4;
    return $som2;
}

$result2 = subtract1($getal5, $getal6);
echo "$result2<br>";

function divide1($getal5, $getal6){
    $som2 = $getal5 / $getal6;
    return $som2;
}

$result2 = divide1($getal5, $getal6);
echo "$result2<br>";

function multiply1($getal7, $getal8){
    $som2 = $getal7 * $getal8;
    return $som2;
}

$result2 = multiply1($getal7, $getal8);
echo "$result2<br>";
?>