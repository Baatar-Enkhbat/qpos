<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
define('ROOT', dirname(__FILE__, 2));
define('SCRIPTS', ROOT . '/scripts');

require SCRIPTS . '/inc/conf.php';
require SCRIPTS . '/inc/db.php';

$db = new Db(DB_HOST, DB_DATABASE, DB_USER, DB_PASS);

// $arr = $db->col("select utas from users");
// foreach ($arr as $value) {
//     echo "<pre>$value";
// }

$ner = $db->val("select ner from users where id = 2");
echo $ner;

$db->debug('sain uu' . $ner);

function dd($var)
{
    echo "<pre>";
    print_r($var);
    echo "<pre>";
}
