<?php
$multiplier = 3;
$numbers = [1, 3, 2, 4, 5];
$squared = array_map(
    fn($n) => $n * $multiplier,
    $numbers
);


var_dump($numbers, $squared);