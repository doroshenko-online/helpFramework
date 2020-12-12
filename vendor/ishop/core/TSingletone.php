<?php


namespace ishop;


trait TSingletone
{
    private static $instance;

    private function __construct()
    {

    }

    public static function instance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}