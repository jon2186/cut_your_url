<?php
define ('SITI_NAME', "Cut your URL");
define('HOST', "http://" . $_SERVER['HTTP_HOST']);

define('DB_HOST', '127.0.0.1');  
define('DB_NAME', 'cut_url');
define('DB_USER', 'root');
define('DB_PASS', 'root');

define('URL_CHARS', "abcdefghijklmopqrstuvwxyz0123456789-");

session_start();

?>