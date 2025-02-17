<?php
$secret = "magic";
$attempts = 0;
$maxAttempts = 3;

while ($attempts < $maxAttempts) {
  echo "Guess the password: ";
  $guess = trim(fgets(STDIN));

  $attempts++;

  if($guess == $secret) {
    echo "You guessed the password correctly!\n";
    break;
  } elseif($attempts == $maxAttempts) {
    echo "You have reached the maximum number of attempts.\n";
  } else {
    echo "Incorrect password. Try again. You have " . ($maxAttempts - $attempts) . " attempts left.\n";
  }
}

$counter = 1;
$maxNumber = 7;

while($counter <= $maxNumber) {
  if($counter % 3 === 0) {
      echo "Fizz \n";
  } else {
    echo "$counter \n";
  }
  $counter++;
}
?>


