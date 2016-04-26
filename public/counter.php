<?php

function pageController(){
    $count = !isset($_GET['count']) ? 0 : $_GET['count'];

    return ['count' => $count];
}

extract(pageController());

?>

<html>
<head>
    <title>Counter</title>
</head>
<body>
    <p><?= $count ?></p>
    <a href="?count=<?php echo $count + 1 ?>">UP</a>
    <a href="?count=<?= $count - 1?>">DOWN</a>
</body>
</html>