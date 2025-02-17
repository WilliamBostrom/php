<?php
echo "Rocket launch countdown: \n";
for($i = 3; $i >= 0; $i--) {
    echo $i . "\n";
    if($i == 0) {
        echo "Blast off!";
    }
    sleep(1);
}

?>
