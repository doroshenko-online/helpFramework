<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT."/public");
define("APP", ROOT.DIRECTORY_SEPARATOR.'app');
define("CORE", ROOT.DIRECTORY_SEPARATOR.'vendor/ishop'.DIRECTORY_SEPARATOR.'core');
define("LIBS", CORE.DIRECTORY_SEPARATOR.'libs');
define("CACHE", ROOT.DIRECTORY_SEPARATOR.'tmp'.DIRECTORY_SEPARATOR.'cache');
define("CONF", ROOT.DIRECTORY_SEPARATOR.'config');
define("LAYOUT", 'default');

$protocol = 'http';

if ($_SERVER['HTTPS'] === 'on')
{
    $protocol = 'https';
}

$app_path = "$protocol://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", "", $app_path);

$app_path = str_replace('/public/', '', $app_path);
define('PATH', $app_path);
define("ADMIN", PATH.DIRECTORY_SEPARATOR.'admin');

require_once ROOT.'/vendor/autoload.php';