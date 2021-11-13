<?php

namespace TaskFour\Figures;

interface Figure
{
    public function getColor(): string;

    public function getArea(): float;

    public function draw(): void;
}
