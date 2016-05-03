<?php 

$dvds = require 'movies.php';

$title = $_REQUEST['title'];

foreach($dvds as $dvd) {
    if($dvd['title'] == $title){
        break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <dl>
        <dt>Year</dt>
        <dd><?= $dvd['year'] ?></dd>
        <dt>Duration</dt>
        <dd><?= $dvd['duration'] ?></dd>
        <dt>Price</dt>
        <dd><?= $dvd['price'] ?></dd>
    </dl>
    <a href="dvds.php"><button>Back</button></a>
</body>
</html>