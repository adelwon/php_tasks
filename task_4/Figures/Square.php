<?php

namespace TaskFour\Figures;

final class Square extends BaseFigure implements Figure
{
    private float $side;

    public function __construct()
    {
        $this->side = rand(1, 50);
    }


    public function getArea(): float
    {
        return $this->side ** 2;
    }

    public function __toString(): string
    {
        return 'Figure: ' . $this->getName() . '; Side: ' . $this->side . ' сm; Area: ' . $this->getArea() . ' сm2; Color: ' . $this->getColor();
    }
}
