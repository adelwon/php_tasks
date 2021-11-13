<?php
function sortArray(&$persons)
{
    usort(
        $persons,
        static fn($a, $b) => strcmp($a["full_name"], $b["full_name"])
    );
}

function getColorByYear($year)
{
    if ($year <= 15) {
        return "rgba(215,178,0,0.87)";
    }

    if (16 <= $year & $year <= 59) {
        return "rgba(8 205 80)";
    }

    if (60 <= $year) {
        return "rgba(235 58 58)";
    }
}

function isHigherEducation($education): bool
{
    return $education === "вища";
}

function isBeginner($experience): bool
{
    return $experience < 3;
}
