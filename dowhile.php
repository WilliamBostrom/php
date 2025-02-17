<?php



do {
 $diceRoll = rand(1, 6);
 echo "You rolled a $diceRoll \n";
 if(6 == $diceRoll) {
    echo "You rolled a 6, and won the game! \n";
 }
 echo "Do you want to roll again? (y/n) \n";
 $rollAgain = trim(fgets(STDIN));
} while($rollAgain == "y");

?>
