<?php
do {
    // loop body
    $dice = rand(1, 6);
    echo "You rolled a $dice \n";
    if (6 == $dice) {
        echo "Congrats! you hit the jackpot! \n";
    }
    echo "Roll Again (y/n) ?";
    $rollAgain = trim(fgets(STDIN));
} while ($rollAgain == 'y' || $rollAgain == "Y");