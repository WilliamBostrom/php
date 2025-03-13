<?php

function greet($name) {
    return "Hello, $name!";
}

echo greet("William");


function greetWithTime($name, $time = "day"){
  return "Good $time, $name!";
}

echo greetWithTime("William", "night");
