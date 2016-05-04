<?php
    require_once '../Input.php';
    require_once '../Auth.php';

    session_start();
    var_dump($_SESSION);
    if(!Auth::check()){
        header('Location: login.php');
        die();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
    <h1>Hello <?= Auth::user() ?> , You have been Authorized</h1>
    <!-- <h2>One Moment Please...</h2> -->
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>