<?php
function add($a, $b)
{
    echo ($a + $b) . "\n";
}


add(1, 2);


$total = 0;

function addToTotal($a, $b)
{
    global $total;
    $total += $a;
    $total = $total - $b;
    echo $total . "\n";
}

addToTotal(1, 2);
addToTotal(1, 2);
addToTotal(1, 2);
addToTotal(1, 2);
addToTotal(1, 2);