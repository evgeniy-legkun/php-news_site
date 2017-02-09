<?php
    /*Общие настройки*/
    ini_set('display_errors', 1); //включили отображение ошибок
    error_reporting(E_ALL);

    /*Подключение файлов системы*/
    define('ROOT', dirname(__FILE__)); //ROOT - константа с полным путем к проэкту
    require_once (ROOT.'/components/Router.php');//используем полный путь
    require_once (ROOT.'/components/Db.php');

    /*Соединение с БД*/
    /**/
    /*Подключение к роутеру*/
    $router = new Router();
    $router->run();


?>