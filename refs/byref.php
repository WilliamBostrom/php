<?php

function dubbleValue(int $number): int {
  $number *= 2;
  return $number;
}

$orginal = 10;
dubbleValue($orginal);
var_dump($orginal);


