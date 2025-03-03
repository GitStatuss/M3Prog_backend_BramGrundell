<?php
$totaalBesteld = 1500.0;
$verzendKosten = 3.50;
$korting = 00.5;
$cadeautje=false;

//statements

if($totaalBesteld >= 100){
    $verzendKosten = 0;}

if($totaalBesteld >= 400){
    $cadeautje=true;}

$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);

echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
echo "Totaal met verzendkosten wordt het $totaal</br>";

//later

if($cadeautje==true){
    echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";}

    if($totaalBesteld >= 1000){
        echo "U krijgt nog een extra cadeautje ter waarde van 40 euro</br>";}
