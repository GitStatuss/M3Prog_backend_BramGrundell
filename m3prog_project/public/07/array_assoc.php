<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dagen =
['maandag' => '11.1°C',
'dinsdag' => '9.6°C',
'woensdag' => '8.2°C',
'donderdag' => '10.6°C',
'vrijdag' => '5.8°C',
'zaterdag' => '-1.5°C',
'zondag' => '-3.5°C'];

foreach($dagen as $key => $value)
{
    echo "<div><tr><td><h1>$key</h1></td><td><h2>$value</h2></td></tr></div>" ."<br>";
}
?>
  

</body>
<style>
    html{
        font-family: sans-serif;
        background-color: rgba(151, 101, 101, 0.65);
        padding: 0;
    }

    h1{
        padding: 1rem;
        color: brown;
        font-size: 150%;
        border: 5px solid black;

        background-color: rgb(196, 188, 188);
        max-width: 100%;
    }

    h2{
        padding: 1rem;
        color: green;
        font-size: 100%;
        border: 5px solid black;
        background-color: rgb(196, 188, 188);
        max-width: 100%;
    }

    body{
        max-width: 100%;
        border: 10px solid black;
        max-width: 25%;
        max-height: 133vh;
        margin-top: -1.3rem;
        background-color: black;
    }


</style>
</html>