<?php
    $tall = rand(1, 10);
    echo "Tall 1: " . $tall . "<br>";

    $teller = 0;
    do {
        $tall2 = rand(1, 10);
        $teller++;
    }
    while($tall2 != $tall);
    echo "Tall 2: " . $tall2 . "<br>";
    echo "Vi brukte $teller forsøk.";
?>