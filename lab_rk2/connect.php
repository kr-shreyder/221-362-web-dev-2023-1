<?php

// Настройки подключения к БД
$db_host = 'localhost';
$db_user = 'krshreyder';
$db_password = 'Ki123456';
$database = 'krshreyder';

// Подключение к MySQL
$link = mysqli_connect($db_host, $db_user, $db_password, $database);

// Проверка соединения
if (!$link) {
    die("Cannot connect DB: " . mysqli_connect_error());
}

?>