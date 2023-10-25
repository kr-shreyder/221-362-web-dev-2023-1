<?php
ini_set('display_errors', 1);

define('DB_HOST', 'miheev.su');
define('DB_USER', 'postgres');
define('DB_PORT', '5432');
define('DB_PASSWORD', '1234');
define('DB_NAME', 'lab5');

$bd_conn = pg_connect("host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASSWORD);

if (!$bd_conn) {
    print("Cannot connect to DB: " . pg_last_error());
}
?>