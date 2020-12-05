<?php

/**
 * Подключение к базе даных
 * 
 */

$dblocation = "localhost";
$dbname = "myshop";
$dbuser = "admin_j";
$dbpasswd = "123456";

//Соединяемся с БД

$db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}


