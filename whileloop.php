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
  
  } elseif($attempts == $maxAttempts) {
    echo "You have reached the maximum number of attempts.\n";
  } else {
    echo "Incorrect password. Try again. You have " . ($maxAttempts - $attempts) . " attempts left.\n";
  }
}
?>