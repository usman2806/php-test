<?php

class MathUtils
{
    public static float $pi = 3.14159;

    public static function square(float $num): float
    {
        return $num * $num;
    }
}

var_dump(MathUtils::$pi, MathUtils::square(4));


// singleton pattern
// save expensive resources
class Connection
{
    private static $instance = null;
    private function __construct()
    {
    }

    public static function singleton()
    {
        if (null === Connection::$instance) {
            Connection::$instance = new Connection();
        }
        return Connection::$instance;
    }
}


$connection = Connection::singleton();