<?php

$message = "Hello";
$greet = function ($name) use ($message) {
  $message = $message . " bro";
  return "$message, $name!";
};

echo $greet("William");


/* 
$numbers = [1, 2, 3, 4, 5];

$squared = array_map(function ($number) {
  return $number * $number;
}, $numbers);

var_dump($squared);
 */


