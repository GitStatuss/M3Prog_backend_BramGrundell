<?php

$standaardString = 'hello world<br>';
$extraString = 'extra world<br>';

echo $standaardString;
echo $extraString;

$voornaam = 'luigi<br>';
$achternaam = 'Mario<br><br><br>';

$totaleString = $voornaam . $achternaam;

echo $totaleString;

//deel 2

$naam = 'Yoshi';
$enemy = 'Koopa Troopa';
$ondertekentDoor = 'directeur bowser';
$emailTekst = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vindt het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";
echo $emailTekst;

?>