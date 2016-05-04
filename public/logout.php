<?php

require_once '../Input.php';
require_once '../Auth.php';

session_start();

if (Input::has('reset')) {
    if (Input::get('reset') == 'counter') {
        unset($_SESSION['view_count']);
    } elseif (Input::get('reset') == 'session') {
        Auth::logout();
    }
}

?>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>One Moment Please...</h2>
    <script>
        <?= Auth::logout() ?>
        setTimeout(function(){
           window.location='login.php';
        }, 1000);
    </script>
</body>
</html>
    

