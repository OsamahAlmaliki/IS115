<?php
    $startsaldo = 1000;
    $rente = 1.1;
    for($i=1; $i<=5; $i++) {
        $gange = $startsaldo *= $rente;
        echo $i . " året får man en saldo på " . $gange . " kr <br>";
    }
?>