<?php 


// FRONT CONTROLLER


// 1. Общие настройки

 // ошибки и отладка


// 2. Подключения файлов системы

define('ROOT', dirname(__FILE__));


require_once (ROOT.'/application/core/Autoload.php');






// 3. Подключение к БД

// 4. Вызов Router

session_start();
$router = new Router;

$router->run();


