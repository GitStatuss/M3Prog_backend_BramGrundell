<?php

function convertCurrency()
{
$euro = 500;
$yen = 50000;
$result = $euro * $yen;
return $result;
}
$result = convertCurrency();
print("euro: $result<br>");

function sendEmail()
{
$mailTo = "pipipoepoe@gmail.com<br>";
$mailFrom = "bramdepoepenkan@gmail.com<br>";
$subject = "Pooping issue<br>";
$message = "I really really have to poop right now, I need help";
echo "$mailTo $mailFrom  $subject  $message";

}
echo 
$yes = sendEmail();
print("$yes");


?>