<?php

function pageController(){ 
    $name = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    if ($name == 'Daniel' && $pass == 'Curran'){
        header('Location: authorized.php');
        die();
    } else {
        return ['failed' => 'Login Failed'];
    }
}
var_dump($_POST);
pageController();
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>