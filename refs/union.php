<?php
declare(strict_types=1);
function processInput(int|float|string|bool $input) {
return match(true){
  is_int($input) => "Integer: " . $input * 2,
  is_float($input) => "Float: " . round($input * 2.5),
  is_string($input) => "String: " . strtoupper($input),
  is_bool($input) => "Boolean: " . ($input ? "true" : "false"),
  default => "Invalid input",
};
}

// Skriv ut resultaten med echo
$inputs = [10, 10.5, "Hello", true];
foreach ($inputs as $input) {
  echo processInput($input) . "\n";
}
