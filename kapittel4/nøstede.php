<?php
    $s = 20;
    for($i=1; $i<=20; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }
    for($i=$s; $i>=1; $i--) {
        for($j=1; $j<=$i; $j++) {
            echo " * ";
        }
        echo "<br>";
    }
?>