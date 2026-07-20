<?php

enum DaysOfWeek
{
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}

$today = DaysOfWeek::Monday;

if ($today === DaysOfWeek::Monday) {
    echo "Day is correct";
}


enum Colour: string
{
    case RED = "#FF0000";
    case YELLOW = "#FFFF00";
    case GREEN = "#00FF00";
    case BLUE = "#0000FF";
}

echo "\n";
echo Colour::RED->value;


function isWeekend(DaysOfWeek $day): bool
{
    return $day === DaysOfWeek::Saturday || $day === DaysOfWeek::Sunday;
}

echo "\n";
echo isWeekend(DaysOfWeek::Saturday) ? "Yes" : "No";