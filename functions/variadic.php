<?php
declare(strict_types=1);
function sum(...$numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

// echo sum(1, 2, 3, 4, 34, 43, 67);


function introduceTeam(string $teamName, string ...$members): string {

  $total = count($members);
  

  return "Team: $teamName\nMembers: " . implode(", ", $members) . "\n";
}


echo introduceTeam("Team A", "Alice", "Bob", "Charlie");



$numbers = [1, 2, 3, 4, 5];

var_dump(sum(...$numbers));

