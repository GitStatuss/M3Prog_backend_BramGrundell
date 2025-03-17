<?php

function convertCurrency()
{
$euro = 500;
$yen = 50000;
$result = $euro * $yen;
return $result;
}
$result = convertCurrency();
print("euro: $result");

?>