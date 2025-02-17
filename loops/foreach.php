<?php

$basket = ["apple" => 12, "banana" => 2, "cherry" => 3];

$total = 0;
foreach($basket as $fruit => $quantity) {
    echo "$fruit: $quantity \n";
    $total += $quantity;
}
echo "Total: $total \n";

?>