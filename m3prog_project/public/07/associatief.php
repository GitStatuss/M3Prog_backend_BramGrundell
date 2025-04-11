<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoi</title>
</head>
<body>

<?php



$verbruik =
['waterkoker' => 0.2,
'oven' => 2,
'douche' => 6,
'vaatwasser' => 2,
'pc' => 0.4,
'telefoon' => 1,
'laptop' => 0.2];

foreach($verbruik as $key => $value)
{
    echo "<tr><td><h1>$key verbruikt:</h1></td><td><h2>$value kWu</h2></td></tr>" ."<br>";
}

echo "<h1>_________________+<br><br>";
$totaal = 0;
foreach($verbruik as $naam => $kWu)
{
    $totaal = $totaal + $kWu;
}

echo "<h1>totale kWu:</h1><h2>$totaal kWh</h2>";
?>

<style>
        *{
            padding: 0;
            margin: 0;
        }
        html{
            font-size: 62.5%
        }
        body{
            background: rgba(151, 101, 101, 0.65);
            height: 100vh;
        }
        h1{
            font-size: 4rem;
            color: rgba(51, 7, 7, 0.93);
            font-family: sans-serif;
        }
        h2{
            font-size: 3rem;
            margin-bottom: 3rem;
            color: black;
            font-family: sans-serif;
        }

    </style>
</body>
</html>