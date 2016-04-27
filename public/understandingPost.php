<?php

var_dump($_POST);

?>

<html>
<head>
    <title>Post</title>
</head>
<body>
    <form method="POST" action="results.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
    </form>
</body>
</html>