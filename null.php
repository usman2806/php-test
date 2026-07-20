<?php
declare(strict_types=1);

// var_dump(null == null, null == false, null == 0, null == '', null == [], $abc, null, isset($dca), is_null($abc));


function greet(?string $name): void
{
    $name = $name ?? "what a shining shot";
    echo "Hello " . $name . "\n";
}
;


greet('Alice');
greet(null);

var_dump(array_filter([1, null, ""]));