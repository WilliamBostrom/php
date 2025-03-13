<?php
declare(strict_types=1);
$null = null;

var_dump($null == null, $null == false, $null == "", $null == 0, $null == [], isset($null));


function greet(?string $name) {
  echo "Hello, " . ($name ?? "stranger") . "!\n";
}

greet("Batman");
greet(null);



var_dump(
  array_filter([1, null, [], 3])
);