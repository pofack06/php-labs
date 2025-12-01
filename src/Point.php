<?php

namespace App;

class Point
{
    private $x;
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Перенос точки по оси X
    public function moveX(float $delta): void
    {
        $this->x += $delta;
    }

    // Перенос точки по оси Y
    public function moveY(float $delta): void
    {
        $this->y += $delta;
    }

    // Перенос точки на вектор
    public function moveByVector(Vector $vector): void
    {
        $this->x += $vector->getX();
        $this->y += $vector->getY();
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
        return "Point({$this->x}, {$this->y})";
    }
}