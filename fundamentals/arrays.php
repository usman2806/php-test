<?php

$simpleArray = [1, 2, 3, 4, 5];


$associativeArray = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
// echo $simpleArray[1] . "\n";
// echo $associativeArray['name'];


$simpleArray[] = 6;
$associativeArray['country'] = 'USA';

$matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

// echo $matrix[1][1] . "\n";

$fruits = ['apple', 'orange', 'mango', 'banana'];

// var_dump(count($fruits));

// sort($fruits);
// var_dump($fruits);
// rsort($fruits);
// var_dump($fruits);

asort($associativeArray);
// asort($associativeArray); // sort by value
// var_dump($associativeArray);
// ksort($associativeArray); // sort by key
// var_dump($associativeArray);

$numbers = range(1, 5);
// var_dump($numbers);
$squared = array_map(fn($n) => $n ** 2, $numbers);
// var_dump($squared);
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 === 0);
// var_dump($evenNumbers);

$SUM = array_reduce($numbers, fn($sum, $n) => $sum + $n, 0);
// var_dump($SUM);

$moreNumbers = [0, ...$numbers, 6];
// var_dump($moreNumbers);

[$first, $second] = $fruits;

// var_dump($first, $second);

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

// var_dump(array_intersect($set1, $set2), array_diff($set1, $set2), array_diff($set2, $set1));

$keys = array_keys($associativeArray);
$value = array_values($associativeArray);
// var_dump($keys, $value);

// var_dump(array_key_exists('name', $associativeArray), in_array('John', $associativeArray));

$fruitsString = implode(', ', $fruits);
$backToArray = explode(
    ', ',
    $fruitsString
);


// var_dump($fruitsString, $backToArray);


var_dump(array_merge($set1, $set2), array_unique($set1, $set2), array_merge($associativeArray, ['country' => 'Denmark']));



