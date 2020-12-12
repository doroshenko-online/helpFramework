<?php


namespace ishop;


use RedBeanPHP\R;

class Db
{

    use TSingletone;

    private function __construct()
    {
        $db = require_once CONF.DIRECTORY_SEPARATOR.'config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!R::testConnection())
        {
            throw new \Exception('Нет соединения с БД', 500);
        }

        if(!DEBUG)
        {
            R::freeze(true);
        } else {
            R::debug(true, 1);
        }
    }
}