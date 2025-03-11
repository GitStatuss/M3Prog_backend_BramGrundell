<?php
$HoeLangIsDitWoord = "scrabblewoord";
$woordLengte = strlen($HoeLangIsDitWoord);
print($woordLengte);

echo "</br>";

$OkDitIsErgLang = "hippopotomonstrosesquippedaliophobia";
$woordErgLang = strlen($OkDitIsErgLang);
print($woordErgLang);

echo "</br>";

//1 pointer
//2 size_t
//3 lengte
//4 2x

$tweeMacht2 = pow(2,2);
$tweeMacht2 = pow(2,10);

print($tweeMacht2);

$drieMacht2 = pow(2,10);

echo "</br>";

$naam = "wario";
$naamGroot = strtoupper($naam);
print $naamGroot . "\n";
$naamKlein = strtolower($naamGroot);
print $naamKlein . "\n";
?>
