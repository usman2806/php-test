<?php

// Double Quote
$name = "John";

echo "Hello, $name! \n";

$heredoc = <<<EOD
Multi line string 
with variable $name\n
EOD;

$nowdoc = <<<'EOD'
Multiline without variable $name, and \n no special Character
EOD;

$str = "Hello World!";
// echo $str[0];
// echo $str[-1] . "\n";

// echo substr($str, 1, 5);
// echo strtoupper($str);
// echo "\n";
// echo strtolower($str);

// $greeting = "Hello " . "World";
// $greeting .= " How are you";
// echo "\n";

// echo $greeting;


$haystack = "The quick brown fox jumps over the lazy dog";
// $pos = strpos($haystack, "quick");
// echo "\n";

// var_dump($pos);

// var_dump(str_replace("quick", "lazy", $haystack));
// preg_match_all('/\w{5}/', $haystack, $matches, PREG_SET_ORDER);
// var_dump($matches);


$name = "Alice";
$age = 88;
// printf("%s is %d years old.", $name, $age);

$csv = "apple,banana,cherry";
// $fruits = explode(",", $csv);
// var_dump($fruits);
// var_dump(implode(",", $fruits));

$padded = str_pad("Hello", 11, '-', STR_PAD_BOTH);

// echo $padded;

// echo "\n";

var_dump(trim("     Hello World!    "));

$japanese = "私はりんごを食べます";
// var_dump(mb_strlen($japanese));

$url = "https://www.udemy.com/course/laravel-beginner-fundamentals/learn/lecture/46135881#overview";
// var_dump(urldecode($url));


$html = "<p>Lorem ipsum dolor might <a href='#'>Hello work</a></p>";
// var_dump(htmlentities($html));

$encode = base64_encode($html);

// var_dump(base64_decode($encode));