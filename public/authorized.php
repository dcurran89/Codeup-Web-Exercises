<?php

    session_start();
    var_dump($_SESSION);
    if(!isset($_SESSION['logged_in_user'])){
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
    <h1>Hello <?= $_SESSION['logged_in_user'] ?> , You have been Authorized</h1>
    <!-- <h2>One Moment Please...</h2> -->
    <a href="logout.php"><button>Logout</button></a>

<!--     <script>
        setTimeout(function(){
           window.location='logout.php';
        }, 2000);
    </script> -->
</body>
</html>