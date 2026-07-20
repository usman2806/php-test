<?php

$largeArray = range(0, 1000_000);

$startTime = microtime(true);
$startMem = memory_get_usage();

foreach ($largeArray as &$value) {
    $value = $value * 2;
}

$endTime = microtime(true);
$endMem = memory_get_usage();

echo "Time: " . ($endTime - $startTime) . " seconds";

echo "\nMemory: " . round(($endMem - $startMem) / 1024 / 1024) . "MBs";