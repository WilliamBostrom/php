<?php

$size = "L";

switch($size) {
    case "S":
        echo "Small\n";
        break;
    case "M":
        echo "Medium\n";
        break;
    case "L":
        echo "Large\n";
        break;
    case "XL":
        echo "Extra Large\n";
        break;
    default:
        echo "Invalid size\n";
}


 $badAttempts = 3;

 switch($badAttempts) {
    case 3:
        echo "You are blocked\n";
    case 2:
        echo "You have 2 attempts left\n";
    case 1:
        echo "You have 1 attempt left\n";
 }

?>