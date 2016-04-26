<?php

$favorites = ['Food', 'Music', 'Coding', 'Family', 'Friends', 'Traveling'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>
    <link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">
</head>
<body>
    <h1>My Favorite Things</h1>
    <table>
        <?php foreach($favorites as $value): ?>
        <tr>
            <td><?php echo $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>