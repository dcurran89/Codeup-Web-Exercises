<?php

$favoriteFoods = ['Brownies', 'Pound Cake', 'Doughnuts'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Foods</h1>
    <ol>
    <?php foreach ($favoriteFoods as $favoriteFood) { ?>
        <li><?php echo ($favoriteFood); ?></li>
    <?php } ?>
    </ol>
</body>
</html>