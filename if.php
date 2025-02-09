<?php

$x = 10;
if ($x > 5) {
    echo "x is greater than 5 \n";
} else {
    echo "x is less than 5";
}

$score = 65;

if($score >=90){
  echo "You got an A \n";
}elseif($score >=80){
  echo "You got a B \n";
}elseif($score >=70){
  echo "You got a C \n";
}else{
  echo "You got a F \n";
}


$num = -16;

if($num > 0) {
  if($num % 2 == 0){
    echo "Positive even number \n";
  }else{
    echo "Positive odd number \n";
  }
} else {
  echo "Non-positive number \n";
}

$username = "admin";
$password = "123456";

if($username === "admin" && $password === "123456"){
  echo "Login successful \n";
}else{
  echo "Login failed \n";
}

