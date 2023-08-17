<?php

class Singleton
{
    private static $theInstance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$theInstance === NULL) {
            self::$theInstance = new Singleton();
        }
        return self::$theInstance;
    }

    public function showMessage()
    {
        echo "¡Hola desde la instancia Singleton! <br/>";
    }

}





?>