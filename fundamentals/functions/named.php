<?php


function greet(string $name, string $greet = "Hello", bool $shout = false): string
{
    $message = "$greet, $name!";
    return $shout ? strtoupper($message) : $message;

}
echo greet("Alice", "Hi", true) . "\nf";


echo greet(name: "David", shout: false);