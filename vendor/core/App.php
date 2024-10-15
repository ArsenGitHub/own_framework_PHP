<?php

namespace core;

class App
{
    //Контейнер для экземпляра класса Registry, через который будет осуществляться доступ в контейнер приложения
    public static object $app;

    public function __construct() {
        //Экземпляр класса
        self::$app = Registry::getInstance();

        $this->getParams();
    }

    //Метод для "сохранения" параметров в фреймворк(контейнер приложения)
    protected function getParams() : void
    {
        $params = require_once CONFIG . '/params.php';

        if(!empty($params)) {
            foreach ($params as $key => $value) {
                //Записываем все в контейнер приложения из Registry
                self::$app->setProperty($key, $value);
            }
        }
    }

}