<?php

namespace App;

class MagicClass
{
    private $data = [];

    // Конструктор
    public function __construct()
    {
        echo "Вызван магический метод: __construct()\n";
    }

    // Деструктор
    public function __destruct()
    {
        echo "Вызван магический метод: __destruct()\n";
    }

    // Геттер для недоступных свойств
    public function __get($name)
    {
        echo "Вызван магический метод: __get($name)\n";
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    // Сеттер для недоступных свойств
    public function __set($name, $value)
    {
        echo "Вызван магический метод: __set($name, $value)\n";
        $this->data[$name] = $value;
    }

    // Проверка существования свойства
    public function __isset($name)
    {
        echo "Вызван магический метод: __isset($name)\n";
        return isset($this->data[$name]);
    }

    // Удаление свойства
    public function __unset($name)
    {
        echo "Вызван магический метод: __unset($name)\n";
        unset($this->data[$name]);
    }

    // Вызов недоступных методов
    public function __call($name, $arguments)
    {
        echo "Вызван магический метод: __call($name, " . implode(', ', $arguments) . ")\n";
    }

    // Вызов недоступных статических методов
    public static function __callStatic($name, $arguments)
    {
        echo "Вызван магический метод: __callStatic($name, " . implode(', ', $arguments) . ")\n";
    }

    // Сериализация
    public function __sleep()
    {
        echo "Вызван магический метод: __sleep()\n";
        return array_keys($this->data);
    }

    // Десериализация
    public function __wakeup()
    {
        echo "Вызван магический метод: __wakeup()\n";
    }

    // Преобразование в строку
    public function __toString()
    {
        echo "Вызван магический метод: __toString()\n";
        return "Это объект MagicClass";
    }

    // Вызов объекта как функции
    public function __invoke($arg)
    {
        echo "Вызван магический метод: __invoke($arg)\n";
        return "Вызван с аргументом: $arg";
    }

    // Отладка
    public function __debugInfo()
    {
        echo "Вызван магический метод: __debugInfo()\n";
        return ['data' => $this->data, 'info' => 'MagicClass object'];
    }

    // Клонирование
    public function __clone()
    {
        echo "Вызван магический метод: __clone()\n";
    }
}