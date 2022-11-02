<?php
    $runde = 1;
    do {
        $t1 = rand(1, 6);
        $t2 = rand(1, 6);
        echo "Runde: " . $runde . " | Terningkast " . $t1 . " og " . $t2 . "<br>";
        $runde++;
    }
    while ($t2 != $t1);
?>