<?php

// clear session data in memory & on disk and send user a new session cookie
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}

// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
session_start();

if (isset($_POST['reset'])) {
    if ($_POST['reset'] == 'counter') {
        unset($_SESSION['view_count']);
    } elseif ($_POST['reset'] == 'session') {
        clearSession();
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
        <?= clearSession() ?>
        setTimeout(function(){
           window.location='login.php';
        }, 1000);
    </script>
</body>
</html>
    

