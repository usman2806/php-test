<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;


while ($attempts < $maxAttempts) {
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Correct! You have unlocked the treasure! \n";
        break;
    } else if ($attempts == $maxAttempts) {
        echo "Out of Attempts! The treasure remain locked \n";
    } else {
        echo "Wrong! Try again Attempts left: ($attempts - $maxAttempts)";
    }
}