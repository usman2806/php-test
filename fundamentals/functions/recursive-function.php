<?php

function factorial(int $n): int
{
    echo "$n ";
    if ($n === 1 || $n == 0) {
        return 1;
    }
    $total = $n * factorial($n - 1);
    echo "\n" . $total . "\n";
    return $total;
}

// echo factorial(1) . "\n";
// echo factorial(2) . "\n";
// echo factorial(3) . "\n";
// echo factorial(4) . "\n";
echo factorial(5) . "\n";