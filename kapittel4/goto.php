<?php
    for ($i=1; $i <= 7; $i++) {
        if($i == 4) {
            goto beskjed;
        }
        echo "Tallet er: " . $i . "<br>";
    }

    beskjed:
    echo "Nå har det skjedd et hopp ved hjelp av goto.";
?>