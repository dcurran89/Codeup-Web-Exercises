// <?php
// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
// session_start();
// var_dump($_SESSION);
// if (isset($_POST['reset'])) {
//     if ($_POST['reset'] == 'counter') {
//         session_destroy($_SESSION);
//     }
// }
// get the current session ID
// $sessionId = session_id();

// initialize a view count variable
// $viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

// increment the counter
// $viewCount++;

// finally, store the new value in the session
// $_SESSION['view_count'] = $viewCount;
// $_SESSION['username'] = 'Daniel';
// $_SESSION['age'] = 26;
// $_SESSION['address'] = '123 Street';

// <!DOCTYPE html>
// <html>
// <head>
//     <title>Session Example</title>
// </head>
// <body>
//     <ul>
//         <li>Session ID: <?= $sessionId; ?</li>
//         <li>View Count: <?= $viewCount; ?</li>
//     </ul>

//     <form method="POST">
//         <button type="submit" name="reset" value="counter">Reset Counter</button>
//     </form>
// </body>
// </html>