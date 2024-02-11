<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
define('ROOT', dirname(__FILE__, 2));
define('SCRIPTS', ROOT . '/scripts');

require SCRIPTS . '/inc/conf.php';
require SCRIPTS . '/inc/db.php';

$db = new Db(DB_HOST, DB_DATABASE, DB_USER, DB_PASS);

$script = $_SERVER['REQUEST_URI'];

if ($script == '/') {
    require ROOT . "/scripts/user/login.php";
    exit;
}

{
    $lastchar = substr($script, strlen($script) - 1, 1);
}

if ($lastchar == '/') {
    $script = substr($script, 0, -1);
    $script = ROOT . "/scripts" . $script . ".php";
} else {
    // params
    $tokens = explode('?', $script);
    require ROOT . "/scripts" . $tokens[0] . ".php";
    exit;
}

if (file_exists($script)) {
    require $script;
} else {
    require ROOT . "/scripts/404.php";
    exit;
}

function dd($var)
{
    echo "<pre>";
    print_r($var);
    echo "<pre>";
}
