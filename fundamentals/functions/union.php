<?php
declare(strict_types=1);



function processInput(int|float|string $input)
{
    return match (true) {
        is_int($input) => "Integer: " . ($input * 2),
        is_float($input) => "Float: " . round($input, 2),
        is_string($input) => "String: " . strtoupper($input),
        default => "Unsupported type",
    };
}

$inputs = ["stging", 1, 13.456, 2, "batman"];

foreach ($inputs as $input) {
    echo processInput($input) . "\n";
}