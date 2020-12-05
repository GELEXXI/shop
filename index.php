<?php

include_once 'config/config.php'; //Инициализация настроек
include_once 'config/db.php'; // Инициализация базы даных
include_once 'library/mainFunction.php'; // Основные функции

// опредиляем с каким котролером будем работать 
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index'; 

// определяем с к какой функцией будем работать
$actionName = isset($_GET['action'])? $_GET['action'] : 'index';

loadPage($smarty, $controllerName,$actionName);

