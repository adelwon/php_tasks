<?php

namespace TaskFour;

use TaskFour\Figures\Circle;
use TaskFour\Figures\Figure;
use TaskFour\Figures\Triangle;
use TaskFour\Figures\Square;
use TaskFour\Figures\Trapeze;

class FiguresFactory
{
    private const MAX_FIGURES_GENERATE = 20;
    private const AVAILABLE_FIGURES = [
        Circle::class,
        Triangle::class,
        Square::class,
        Trapeze::class,
    ];

    private array $figures;

    public function __construct()
    {
        $generationQuantity = rand(1, self::MAX_FIGURES_GENERATE);
        $availableFigureQuantity = count(self::AVAILABLE_FIGURES) - 1;

        for ($i = 0; $i < $generationQuantity; $i++) {
            $class = self::AVAILABLE_FIGURES[rand(0, $availableFigureQuantity)];

            $this->pushFigure(new $class);
        }
    }

    public function getFigures(): array
    {
        return $this->figures;
    }

    public function pushFigure(Figure $figure): void
    {
        $this->figures[] = $figure;
    }
}
