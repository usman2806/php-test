<?php

$greet = function ($name) {
    echo "Hello, $name! \n";
};

echo $greet("Dawood");

$numbers = [12, 3, 4];

$squared = array_map(function ($number) {
    return $number * $number;
}, $numbers);

echo implode(" ", $squared) . "\n";
var_dump($squared);

// Anonymous functions can't access variable from outside except you write use($variableName)

$message = "Bye";

$greet = function ($name) use (&$message) {
    $message = "bye mikki";
    return "$message, $name \n";
};

echo $greet("shikki");
echo $message;

