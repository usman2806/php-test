<?php

// Pass by Value and Pass by Reference
$person = "John";
echo $person;
echo "\n";
$client = &$person;
echo $client;
echo "\n";

$client = "April";
echo $client;
echo "\n";

echo $person;
echo "\n";

$person = "Harry Potter";

var_dump($client, $person);

function doubleValue(int &$value): int
{
    $value = $value * 2;
    return $value;
}


$original = 5;
doubleValue($original);
var_dump($original);