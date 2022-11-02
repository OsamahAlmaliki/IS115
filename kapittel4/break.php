<?php
    for ($i=1; $i <= 7; $i++) {
        if($i == 4) {
            break;
        }
        echo "Tallet er: " . $i . "<br>";
    }

    for ($i=1; $i <= 7; $i++) {
        if($i == 4) {
            continue;
        }
        echo "Tallet er: " . $i . "<br>";
    }
?>