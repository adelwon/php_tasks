<?php

namespace TaskFour\Figures;

final class Circle extends BaseFigure implements Figure
{
    private float $radius;

    public function __construct()
    {
        $this->radius = rand(1, 50);
    }

    public function getArea(): float
    {
        return M_PI * ($this->radius ** 2);
    }



    public function __toString(): string
    {
        return 'Figure: ' . $this->getName() . '; Radius: ' . $this->radius . ' сm; Area: ' . $this->getArea() . ' сm2; Color: ' . $this->getColor();
    }
}
