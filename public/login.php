<?php

require 'functions.php';

function pageController(){ 
    $name = inputHas('username') ? inputGet('username') : '';
    $pass = inputHas('password') ? inputGet('password') : '';

    $message = '';

    if ($name == 'Daniel' && $pass == 'Curran'){
        $_SESSION['logged_in_user'] = $name; 
        header('Location: authorized.php');
        die();
    } elseif($name != '' || $pass != '') {
        $message = 'Login Failed!';
    } else {
        $message = 'Please Login';
    }

    return ['message' => $message];
}

session_start();
$session_Id = session_id();
$_SESSION['session_id'] = $session_Id;
var_dump($_SESSION);
extract(pageController());

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <p><?= escape($message) ?></p>

</body>
</html>