<?php


$x = 10;
if ($x > 5) {
    echo "x is greater than 5 \n";
}

$scores = 85;

if ($scores > 90) {
    echo "A";
} elseif ($scores >= 80) {
    echo "B";
} elseif ($scores >= 70) {
    echo "C";
} elseif ($scores >= 60) {
    echo "D";
} else
    echo "F";


$num = 5;

if ($num > 0) {
    if ($num % 2 == 0)
        echo "\nPositive even number \n";
    else
        echo "\n Positive odd number\n";
} else {
    echo "\nNon-positive number\n";
}


$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
    echo "Success";
} else {
    echo "Failure";
}

