<?php
$typeGerecht = "hoofd";
$naamGerecht = "Diabetes type 3 donuts";
$prijs = "$26";
$beschrijving = "Niet nemen";
$Ingegredientenlijst = "Deeg, olie, glazuur, diabetes, mycelium, plutonium";
$allergenenLijst = "Gluten, Teveel suiker, radiatie";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?
echo
  "Gerecht type: $typeGerecht<br>
  <br>
  $naamGerecht $prijs<br>
  <br>
  $beschrijving<br>
  Ingegredientenlijst:<br>
  $Ingegredientenlijst<br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  $allergenenLijst<br>";
?>
    
</body>
</html>