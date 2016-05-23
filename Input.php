<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    { 
        if(self::has($key)) {
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    public static function getString($key, $min = 0, $max = 0)
    {
        $value = self::get($key);
        // Check if value is a string
        if (!is_string($value) || !is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("$key must be a string!");
        }
        if(empty($value)) {
            throw new OutOfRangeException("$key is missing!");
        }
        return $value;
    }

    public static function getNumber($key, $min = 0, $max = 0)
    {
        $value = self::get($key, 0);
        if (!is_string($value) || !is_numeric($min) || !is_numeric($max)){
            throw new InvalidArgumentException("$key must be numeric!");
        }
        // if(!is_numeric($value)){
        //     throw new InvalidArgumentException("$")
        // }
        if(empty($value)) {
            throw new OutOfRangeException("$key is missing!");
        }
        return (int)$value;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
