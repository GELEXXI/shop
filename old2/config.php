

<?php

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "admin_j"; // Логин БД
$db_password = "123456"; // Пароль БД
$db_base = 'db_forum'; // Имя БД
$db_table = "comments"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


if (isset($_POST['username']) && isset($_POST['comment'])){
// Переменные с формы
$username = $_POST['username'];
$comment = $_POST['comment'];




$result = $mysqli->query("INSERT INTO ".$db_table." (username,comment) VALUES ('$username','$comment')");

if ($result == true){
    echo "Информация занесена в базу данных";
}else{
    echo "Информация не занесена в базу данных";
}

}


?>