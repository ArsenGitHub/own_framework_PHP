<?php
//Режим работы приложения
define('DEBUG', 1);
//Корень приложения
define('ROOT', dirname(__DIR__));
//Путь к публичной папке public
define('WWW', ROOT . '/public');
//Путь к папке приложения app
define('APP', ROOT . '/app');
//Путь к папке ядра core
define('CORE', ROOT . '/vendor/core');
//Путь к функциям/классам помощникам
define('HELPERS', ROOT . '/vendor/core/helpers');
//Путь к папке с файлами кэша
define('CACHE', ROOT . '/tmp/cache');
//Путь к папке с логами
define('LOGS', ROOT . '/tmp/logs');
//Путь к папке с конфигурациями
define('CONFIG', ROOT . '/config');
//Шаблон сайта по умолчанию
define('LAYOUT', 'shop');
//Адрес нашего сайта
define('PATH', 'http://shop.local');
//Адрес админки сайта
define('ADMIN', 'http://shop.local/admin');
//Путь к картинке по умолчанию, если у товара не назначена картинка
define('NO_IMAGE', 'uploads/no_image.jpg');

//Автозагрузчик
require_once ROOT . '/vendor/autoload.php';