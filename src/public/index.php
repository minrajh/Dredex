<?php

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

ini_set('session.gc_maxlifetime', 1800); // Время жизни сессии в секундах по умолчанию стоит 30 мин.
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

// Объявляем работу с сессиями
session_start();

// Получаем текущее время с точностью до сотой доли секунды
$time=microtime(1);

// Проверяем, имеется ли сессия с массивом для данного пользователя
// Если нет, то добавляем в сессию пустой массив для хранения времени посещений
if (!isset($_SESSION["arr_time"])) $_SESSION["arr_time"]=array(0,0,0);

// Поиск в массиве минимального значения времени захода
$min_time=min($_SESSION["arr_time"]);

// Сравниваем разницу во времени между посещениями и указанным числом
// Если разница меньше указанного числа, то прекращаем работу скрипта
//if ($time-$min_time < 3.5) die("<h1><b>Вы слишком часто обращаетесь к страничкам сайта!</b></h1>");

// Получаем индекс значения минимального времени посещения в массиве
$min_index=array_search($min_time,$_SESSION["arr_time"]);

// Заменяем в массиве минимальное время на текущее
$_SESSION["arr_time"][$min_index]=$time;

$router = new Router;
$router->run();