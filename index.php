<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/libs/helpers.php';
require_once __DIR__ . '/config/paths.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/config/constants.php';

function __autoload_uki($class)
{
    if (file_exists(__DIR__ . '/' . LIBS . $class . '.php')) {
        require __DIR__ . '/' . LIBS . $class . '.php';
    }
}

spl_autoload_register('__autoload_uki');
Session::init();
$app = new Bootstrap();
