<?php

namespace core;

//Шаблон для паттерна "Singleton"
trait TSingleton
{
    private static ?self $instance = null;
    private function __construct() {}
    public static function getInstance(): static {
        if (!static::$instance) static::$instance = new static();
        return static::$instance;
    }

}