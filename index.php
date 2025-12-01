<?php

require 'vendor/autoload.php';

use App\MagicClass;

echo "=== Демонстрация магических методов ===\n\n";

// __construct
echo "1. Создание объекта:\n";
$obj = new MagicClass();
echo "\n";

// __set
echo "2. Установка свойства:\n";
$obj->magicProperty = "test value";
echo "\n";

// __get
echo "3. Получение свойства:\n";
$value = $obj->magicProperty;
echo "Получено: $value\n\n";

// __isset
echo "4. Проверка существования свойства:\n";
$exists = isset($obj->magicProperty);
echo "Свойство существует: " . ($exists ? 'да' : 'нет') . "\n\n";

// __unset
echo "5. Удаление свойства:\n";
unset($obj->magicProperty);
echo "\n";

// __call
echo "6. Вызов несуществующего метода:\n";
$obj->magicMethod("arg1", "arg2");
echo "\n";

// __callStatic
echo "7. Вызов несуществующего статического метода:\n";
MagicClass::staticMagicMethod("static_arg");
echo "\n";

// __toString
echo "8. Преобразование в строку:\n";
echo $obj . "\n\n";

// __invoke
echo "9. Вызов объекта как функции:\n";
$result = $obj("invoke_argument");
echo "Результат: $result\n\n";

// __clone
echo "10. Клонирование объекта:\n";
$clone = clone $obj;
echo "\n";

// __sleep и __wakeup (сериализация)
echo "11. Сериализация:\n";
$serialized = serialize($obj);
$unserialized = unserialize($serialized);
echo "\n";

// __debugInfo
echo "12. Отладочная информация:\n";
var_dump($obj);
echo "\n";

// __destruct будет вызван автоматически при завершении скрипта
echo "13. Завершение скрипта (__destruct будет вызван автоматически):\n";

echo "\n=== Демонстрация геометрических классов ===\n\n";

use App\Point;
use App\Vector;

// Создание точки с произвольными координатами T1
echo "1. Создание точки T1:\n";
$t1 = new Point(2, 3);
echo "T1: $t1\n\n";

// Создание произвольного вектора V1
echo "2. Создание вектора V1:\n";
$v1 = new Vector(3, 4);
echo "V1: $v1\n\n";

// Создание нулевого вектора V2
echo "3. Создание нулевого вектора V2:\n";
$v2 = new Vector(0, 0);
echo "V2: $v2\n\n";

// Создание вектора V3, перпендикулярного V1
echo "4. Создание вектора V3, перпендикулярного V1:\n";
$v3 = $v1->getPerpendicular();
echo "V3: $v3\n\n";

// Длина каждого вектора
echo "5. Длины векторов:\n";
echo "Длина V1: " . $v1->length() . "\n";
echo "Длина V2: " . $v2->length() . "\n";
echo "Длина V3: " . $v3->length() . "\n\n";

// Проверка перпендикулярности V3 и V1
echo "6. Проверка перпендикулярности V3 и V1:\n";
$isPerpendicular = $v3->isPerpendicularTo($v1);
echo "V3 перпендикулярен V1: " . ($isPerpendicular ? 'да' : 'нет') . "\n\n";

// Перенос точки T1 на вектор V1
echo "7. Перенос точки T1 на вектор V1:\n";
echo "До переноса: $t1\n";
$t1->moveByVector($v1);
echo "После переноса: $t1\n";