<?php


$add = fn($a, $b) => $a + $b;


function HigherOrder($op, $a, $b)
{
    return $op($a, $b);
}


echo HigherOrder($add, 1, 2);

$users = [
    ['id' => 1, 'name' => 'Alice', 'role' => 'admin'],
    ['id' => 2, 'name' => 'john', 'role' => 'user'],
    ['id' => 3, 'name' => 'august', 'role' => 'user'],
];

function createFilter($key, $value)
{
    return fn($item) => $item[$key] === $value;
}

$isAdmin = createFilter('role', 'admin');
$isJohn = createFilter('name', 'john');
$admins = array_filter($users, $isAdmin);


var_dump($admins);
var_dump(array_filter($users, $isJohn));