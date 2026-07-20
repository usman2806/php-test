<?php

$size = "L";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium Size\n";
        break;
    case "L":
    case "XL":
        echo "Large or Extra Large Size\n";
        break;
    default:
        echo "Unknown Size\n";

}

$badAttempts = 3;

switch ($badAttempts) {
    case 3:
        echo "You are blocked!\n";
    case 2:
    case 1:
        echo "Bad attempt detected!\n";
}