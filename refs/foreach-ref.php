<?php

$largeArray = range(1, 1_000_000);
$start = microtime(true);
$startMem = memory_get_usage();

// $out = [];
// Mindre minne utan referens
foreach ($largeArray as &$number) {
  $number *= $number * 2;
}

$end = microtime(true);
$endMem = memory_get_usage();

echo "Time: " . ($end - $start) . " seconds\n";
echo "Memory: " . round(($endMem - $startMem) / 1024 / 1024) . " MB\n";



