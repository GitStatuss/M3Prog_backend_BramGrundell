<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit. <br/>";

// Celsius naar Fahrenheit
$celsius = 19;
$fahrenheit = ($celsius * 9/5) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$celsius = 19;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// Fahrenheit naar Kelvin
$fahrenheit = 74;
$kelvin = ($fahrenheit - 32) / 1.8 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden Kelvin. <br/>";
?>