<?php
$getal = 11214.489;
$afgerond = round($getal);
echo "Als je $getal afrond dan krijg je: $afgerond<br><br>";
// Als je 11214.489 afrond dan krijg je: 11214

//Dit is mijn werk hier onder
$getal1 = 69.36489;
$afgerond1 = round($getal1);
echo "Getal $getal1 afgerond is: $afgerond1<br><br>";

$getal2 = 48.72068;
$afgerond2 = floor($getal2);
echo "Getal $getal2 afgerond is: $afgerond2 als ceil wordt gebruikt.<br><br>";

$random1 = rand();
$random2 = rand();
$random3 = rand();

echo $random1 + $random2;
$antwoord1 = $random1 + $random2;
echo "<br><br>";
echo $antwoord1 + $random3;

?>