<?php if( !defined('OK') ){ exit(); }


// GENERAL
define('APP_NAME', "PHP Site");


// MYSQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'music_library');


// GLOBALS
$lang       = 'en';
$now        = getdate();
$filename   = ltrim($_SERVER['SCRIPT_NAME'],'/');

