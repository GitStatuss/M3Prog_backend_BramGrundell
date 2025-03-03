<?php
$opvoorraad =false;
$aantalOpVoorraad = 20;
 if($opvoorraad == false)
 {
echo "niet op voorraad";
 }
 if($opvoorraad == true)
 {
echo "$aantalOpVoorraad";
 }
 $opvoorraad= $aantalOpVoorraad > 0;

 //OPDRACHT LES 03
 $opvoorraad =$aantalOpVoorraad > 0;
 if(false)//() komt uit op false
{
    echo "niet op voorraad";
}
else
{
    echo " momenteel op voorraad";
}
?>