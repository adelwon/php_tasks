<?php
function sortArray(&$persons)
{
    usort($persons, static function ($a, $b) {
        return strcmp($a["full_name"], $b["full_name"]);
    });
}


function ageGroups($year)
{
    if ($year <= 15) {
        echo "rgba(255,220,40,0.87)";
    }
}
