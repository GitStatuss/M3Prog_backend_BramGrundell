<?php
$stoplichtKleurR='R';
$stoplichtKleurO='O';
$stoplichtKleurG='G';
$stoplichtKleur = $stoplichtKleurG;
$stoplichtKleur = $stoplichtKleurO;
$stoplichtKleur = $stoplichtKleurR;
if($stoplichtKleurG == $stoplichtKleur) //GROEN
{
echo  "<button style='background-color:#00FF00;height:25px;width:25px;'/>";
}
else if($stoplichtKleurO == $stoplichtKleur) //ORANJE
{
echo  "<button style='background-color:#FFA500;height:25px;width:25px;'/>";
}
else //ROOD
{
echo  "<button style='background-color:#FF0000;height:25px;width:25px;'/>";
}
?>