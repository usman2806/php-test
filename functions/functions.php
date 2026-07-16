<?php
function greet($name)
{
    return "Hello, $name \n";
}

echo greet("Alice");

// echo greet(); // gives an error

function greetWithTime($name, $time = 'day')
{
    return "Good $time, $name \n";
}

echo greetWithTime("Bob");
echo greetWithTime("Charlie", "evening");

// Type definition of arguments in functions
