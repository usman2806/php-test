<?php
declare(strict_types=1);
function sum(int ...$numbers): int
{
    $sum = 0;
    var_dump($numbers);
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

var_dump(sum());
var_dump(
    sum(5)
);

var_dump(
    sum(5, 10, 15, 19, 34, 27)
);


$numbers = [1, 2, 3];

var_dump(sum(...$numbers));


function introduceTeam(string $teamName, string ...$members): void
{
    echo "Team: $teamName\n";
    var_dump($members);
    echo "Members: " . implode(", ", $members) . "\n";
}


introduceTeam("A Team", "John Dena", "Iron Man", "Superman", "Mola", "James Bond", "Mr, Bean", "Jackie Chan");

$members = ["John Dena", "Iron Man", "Superman"];

introduceTeam("B Team", ...$members);