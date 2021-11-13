<?php

namespace TaskFour\Figures;

final class Triangle extends BaseFigure implements Figure
{
    private float $legHeight;
    private float $legBase;

    public function __construct(){
        $this->legHeight = rand(1, 50);
        $this->legBase = rand(1, 50);
    }

    public function getHypotenuse(): float
    {
        return sqrt(($this->legHeight ** 2) + ($this->legBase ** 2));
    }

    public function getArea(): float
    {
        return ($this->legHeight * $this->legBase)/2;
    }

    public function __toString(): string
    {
        return 'Figure: ' . $this->getName() . '; Hypotenuse: ' . $this->getHypotenuse() . ' сm; Area: ' . $this->getArea() . ' сm2; Color: ' . $this->getColor();
    }
}
