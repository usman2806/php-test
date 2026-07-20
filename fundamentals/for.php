<?php
echo "Rocket launch Countdown: \n";
for ($i = 10; $i > 0; $i--) {
    echo $i . "...";
    if (1 == $i) {
        echo "Liftoff ! ";
    }
}


