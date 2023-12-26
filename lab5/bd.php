<?php
ini_set('display_errors', 1);

define('DB_HOST', 'pg3.sweb.ru');
define('DB_USER', 'krshreyder');
define('DB_PORT', '5432');
define('DB_PASSWORD', 'WebLab5pass');
define('DB_NAME', 'krshreyder');

$bd_conn = pg_connect("host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASSWORD);

if (!$bd_conn) {
    print("Cannot connect to DB: " . pg_last_error());
}
?>