<?php

require_once '../Input.php';

function pageController(){
    
    $count = !(Input::has('count')) ? 0 : Input::get('count');
    return ['count' => $count];
}

extract(pageController());

?>

<html>
<head>
    <title>Ping</title>
    <link rel="stylesheet" type="text/css" href="/css/ping.css">
    <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
</head>
<body>

    <p><?= $count ?></p>
    <a href="/pong.php?count=<?= $count + 1 ?>"><div id="hit">HIT</div></a>
    <a href="/pong.php?count=<?= $count = 0 ?>"><div id="miss">MISS</div></a>

    <script>
        "use strict";

        var $hit = $('#hit');
        var $miss = $('#miss');

        $hit.hover(function(){
            $(this).animate(left: '+=50');
        }, function(){
            $(this).css('background-color', 'green');
        });
    </script>

</body>
</html>