<?php

$superhero = "Batman";

function revealIdentity() {
  global $superhero;
  $message = "real name is Bruce Wayne";
  echo "$superhero $message";
}

// revealIdentity();

function countVisitors() {
  static $visitors = 0;
  $visitors++;
  echo "Visitors: $visitors times\n";
}

countVisitors();
countVisitors();
countVisitors();

