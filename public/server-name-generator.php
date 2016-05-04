<?php 

require_once 'Server.php';

extract(Server::pageController());

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