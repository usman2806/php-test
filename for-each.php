<?php

$basket = [
    "Apple" => 4,
    "Banana" => 12

];

$total = 0;

foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total = $total + $quantity;
}

echo "Total Items: $total \n";