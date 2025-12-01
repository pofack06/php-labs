<?php

namespace App;

class Vector
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Длина вектора
    public function length(): float
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    // Проверка на нулевой вектор
    public function isZero(): bool
    {
        return $this->x == 0 && $this->y == 0;
    }

    // Проверка на перпендикулярность другому вектору
    public function isPerpendicularTo(Vector $other): bool
    {
        // Два вектора перпендикулярны если их скалярное произведение равно 0
        return ($this->x * $other->getX() + $this->y * $other->getY()) == 0;
    }

    // Создание перпендикулярного вектора
    public function getPerpendicular(): Vector
    {
        // Для вектора (x, y) перпендикулярным будет (-y, x) или (y, -x)
        return new Vector(-$this->y, $this->x);
    }

    // Геттеры
    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function __toString(): string
    {
        return "Vector({$this->x}, {$this->y})";
    }
}