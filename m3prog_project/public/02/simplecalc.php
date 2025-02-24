<?php

    //direct met getallen
    $eenPlusEen = 1 + 1;
    $tienMinVijf = 10 - 5;

    //met variabelen
    $leeftijd = 17;
    $dagen_per_jaar = 365;

    $leeftijd_in_dagen = $leeftijd * $dagen_per_jaar;

    //en dan op het scherm:
    echo "Ik ben " . $leeftijd . " jaar " . " en dus al " . $leeftijd_in_dagen . " dagen oud!"; 

    $som1 = 2 + 2;
    $som2 = 5 * 5;
    $som3 = 100 / 10;
    $som4 = 60 - 25;

    echo "<br>$som1<br>";
    echo "$som2<br>";
    echo "$som3<br>";
    echo "$som4<br>";

    $varsom1 = $som1 * $som2;
    $varsom2 = $som4 / $som3;
    $varsom3 = $varsom1 * $som4 / $varsom2 - $som2;

    echo "<br>$varsom1<br>";
    echo "$varsom2<br>";
    echo "$varsom3<br>";
?>