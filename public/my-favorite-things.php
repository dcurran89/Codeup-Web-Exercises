<?php

function pageController() {

    $favorites = ['Food', 'Music', 'Coding', 'Family', 'Friends', 'Traveling'];
    $data = array();

    $data['favorite'] = $favorites;

    return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>
    <link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">
</head>
<body>
    <h1 id="title">My Favorite Things</h1>
    <table id="table">
        <?php foreach($favorite as $value): ?>
        <tr>
            <td><?= $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>