<?php
$int = 43;
$float = 3.14;
$stringToInt = (int) "100";

$floatToInt = (float) 4.99;

// var_dump($int, $int, $floatToInt, $stringToInt);


// var_dump(3 + 3, 7 % 2) . "\n";

// var_dump(round(4.7), round(3.4)) . "";
// var_dump(floor(4.7), ceil(4.3), min(1, 3, 4, 5, 6), max(1, 43, 4657, 33, 11, 90)) . "";
var_dump(rand(0, 10), abs(-5));

$number = 1234.94;
echo "Formatted: " . number_format($number, 2, "+0.", ",") . "";