<?php

namespace TaskFour\Helpers;

final class RandomColorHelper
{
    public const COLOR_PARTS = ['A', 'B', 'C', 'D', 'E', 'F'];

    public static function getColor(): string
    {
        $color = '#';

        for ($i = 0; $i < 6; $i++) {
            $colorPartNumber = rand(0, 5);

            $color.=$colorPartNumber;
        }

        return $color;
    }
}
