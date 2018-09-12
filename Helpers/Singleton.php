<?php

trait Singleton
{
    private static $instances = [];

    public static function getInstance() {
        $caller = get_called_class();

        if (!isset(self::$instances[$caller]))
            self::$instances[$caller] = new static;
        
        return self::$instances[$caller];
    }
}