<?php

namespace core;

class Registry
{
    use TSingleton;

    //Контейнер для данных
    protected static array $properties = [];

    public function setProperty(string $key, $value): void {
        self::$properties[$key] = $value;
    }

    public function getProperty(string $key) {
        return self::$properties[$key] ?? null;
    }

    public function getProperties(): array {
        return self::$properties;
    }
}