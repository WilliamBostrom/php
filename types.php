<?php

$isStudent = 1;

// var_dump($isStudent, "hejsan", $isStudent === true);

$scores = [85, (int)"90", 95.5];
$totalScore = $scores[0] + $scores[1];

var_dump($scores, $totalScore);
echo "Total scores is: $totalScore \n";

?>