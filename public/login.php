<?php

require_once '../Auth.php';
require_once '../Input.php';

session_start();
$session_Id = session_id();
$_SESSION['session_id'] = $session_Id;
var_dump($_SESSION);
$message = 'Please Login';
if($_POST){
    extract(Auth::attempt(Input::get('username'), Input::get('password')));
}

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1><?= strip_tags($message) ?></h1>
    <form method="post" action="login.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>