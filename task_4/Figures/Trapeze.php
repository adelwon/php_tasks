<?php

namespace TaskFour\Figures;

final class Trapeze extends BaseFigure implements Figure
{
    private float $base_first;
    private float $base_second;
    private float $height;

    public function __construct()
    {
        $this->base_first = rand(1, 50);
        $this->base_second = rand(1, 50);
        $this->height = rand(1, 50);
    }

    public function getArea(): float
    {
        return ($this->base_first + $this->base_second) / 2 * $this->height;
    }

    public function __toString(): string
    {
        return 'Figure: ' . $this->getName() . '; Height: ' . $this->height . ' сm; Area: ' . $this->getArea() . ' сm2;  Color: ' . $this->getColor();

    }
}
