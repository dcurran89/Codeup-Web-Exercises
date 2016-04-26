<?php


$adjectives = ['Garrulous', 'Defamatory', 'Calamitous', 'Heuristic', 'Pernicious', 'Munificent', 'Bellicose', 'Adroit', 'Contumacious', 'Turgid'];
$nouns = ['People', 'Slangwhanger', 'Jackanapes', 'Hootenanny', 'Gaberlunzie', 'Panjandrum', 'Hoosegow', 'Snollygoster', 'Hobbledehoy', 'Fuddy-duddy'];

$randomAdj = mt_rand(0, sizeof($adjectives) - 1);
$adjValue = $adjectives[$randomAdj];

$randomNoun = mt_rand(0, sizeof($nouns) - 1);
$nounValue = $nouns[$randomNoun];

// var_dump($randomAdj . " " . $randomNoun . PHP_EOL);
// var_dump($adjValue . " " . $nounValue . PHP_EOL);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
    <link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">
</head>
<body>
    <div id="container">
        <h1 id="generatedName"><?php
                echo $adjValue . " " . $nounValue . PHP_EOL;
            ?>
        </h1>
    </div>
</body>
</html>