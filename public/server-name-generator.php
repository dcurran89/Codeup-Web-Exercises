<?php

function serverName($valueOne, $valueTwo){

    $name = $valueOne . " " . $valueTwo;
    return $name;
}

function pageController(){

    $adjectives = ['Garrulous', 'Defamatory', 'Calamitous', 'Heuristic', 'Pernicious', 'Munificent', 'Bellicose', 'Adroit', 'Contumacious', 'Turgid'];
    $nouns = ['People', 'Slangwhanger', 'Jackanapes', 'Hootenanny', 'Gaberlunzie', 'Panjandrum', 'Hoosegow', 'Snollygoster', 'Hobbledehoy', 'Fuddy-duddy'];
    $data = array();

    $randomAdj = mt_rand(0, sizeof($adjectives) - 1);
    $adjValue = $adjectives[$randomAdj];

    $randomNoun = mt_rand(0, sizeof($nouns) - 1);
    $nounValue = $nouns[$randomNoun];

    $data['message'] = serverName($adjValue, $nounValue);

    return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
    <link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">
</head>
<body>
    <div id="container">
        <h1 id="generatedName"><?= $message . PHP_EOL;?>
        </h1>
    </div>
</body>
</html>