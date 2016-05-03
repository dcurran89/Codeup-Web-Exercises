<?php

$dvds = require 'movies.php';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>My DVDs</title>
 </head>
 <body>
    <h1>My DVDs</h1>
    <ul>
    <?php foreach($dvds as $dvd) : ?>
        <li>
            <a href="show-dvd.php?title=<?= $dvd['title'] ?>">
            <?= $dvd['title'] ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
 </body>
 </html>