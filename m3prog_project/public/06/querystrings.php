<?php

$stad = $_GET['stad'];
$temp = $_GET['temperatuur'];
$land = $_GET['land'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoi</title>
</head>
<body>
    <article>
        <?php 

        echo "<h1>Stad:</h1> <h2>$stad <br></h2> 
            <h1>Temperatuur:</h1> <h2>$temp C<br></h2> 
            <h1>Land:</h1> <h2>$land</h2>";

        ?>
    </article>
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

<?//localhost:88/06/querystrings.php?stad=Londen&temperatuur=16&land=Engeland