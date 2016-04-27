<?php

function pageController(){
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];

    return ['count' => $count];
}

extract(pageController());

?>

<html>
<head>
    <title>Pong</title>
    <link rel="stylesheet" type="text/css" href="/css/pong.css">
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
</head>
<body>
    <p><?= $count ?></p>
    <a href="/ping.php?count=<?= $count + 1 ?>"><div id="hit"></div></a>
    <a href="/ping.php?count=<?= $count = 0 ?>"><div id="miss"></div></a>
</body>
</html>