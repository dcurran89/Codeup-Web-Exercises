<?php

require_once '../Log.php';
require_once '../Input.php';

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password)
    {
        $username = Input::has('username') ? Input::get('username') : '';
        $password = Input::has('password') ? Input::get('password') : '';

        // $message = 'Please Login';

        if($username === 'Daniel' && password_verify($password, self::$password)){ 
            $_SESSION['logged_in_user'] = $username;
            header('Location: authorized.php');
            die();
            Log::logInfo("User $username logged in.");
        } else {
            Log::logError("User $username failed to log in!");
            if($_POST){
                $message = "User $username failed to log in!";
            }
        } 

        return ['message' => $message];
    }
    public static function check()
    {
        if(isset($_SESSION['logged_in_user'])){
            return true;
        } else {
            return false;
        }
    }
    public static function user()
    {
        return $_SESSION['logged_in_user'];
    }
    public static function logout()
    {
        session_unset();
        session_regenerate_id(true);
    }
}

?>