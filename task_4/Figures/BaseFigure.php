<?php

namespace TaskFour\Figures;

use TaskFour\Helpers\RandomColorHelper;

abstract class BaseFigure
{
    public function getColor(): string
    {
        return RandomColorHelper::getColor();
    }

    public function getName(): string
    {
        $class = explode('\\', static::class);

        return end($class);
    }

    public function draw(): void
    {
        // TODO: Implement draw() method.
    }
}
