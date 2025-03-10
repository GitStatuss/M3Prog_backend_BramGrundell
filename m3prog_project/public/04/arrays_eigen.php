<?php
$bands = ["King Gizzard And The Lizard Wizard", "Lorna shore", "System of a down"];
print_r($bands);
echo "</br></br>";
var_dump($bands); 

//les-04

echo count($bands). "<br><br>";
$bands[] = "nog een band";
array_push($bands, "Chelsea grin");
print_r($bands);
echo "<br><br>";
echo implode(' >> ', $bands);
echo "<br><br>";

echo $bands[0]; 
echo "<br>";
echo $bands[1]; 
echo "<br>";
echo $bands[2]; 
echo "<br>";
echo $bands[4]; 
echo "<br>";
?>