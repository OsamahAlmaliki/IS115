<?php
    $i = 1;
    while($i <= 10) {
        echo $i . " ganger 9 er " . $i*9 . "<br>";
        $i++;
    }

    //Koden skrevet på en mer elegant måte
    $i = 0;
    while($i++ <= 9) 
        echo $i . " ganger 9 er " . $i*9 . "<br>";
?>