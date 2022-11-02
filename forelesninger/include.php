<?php
    //include("include.inc.php");
    //require("include.inc.php");

    //echo pi();

    function areal($r) {
        echo pi() * $r * $r;
    }

    //Det kan gjøres på denne måten, men hvis input skal variere i et system så er det best å definere en variabel radius
    areal(5);

    //Dette er en radius variabel som er brukt med funksjonen
    $radius = 5;
    areal($radius);
    omkrets($radius);

    //Lage funksjom som regner ut omkrets til en sirkel
    function omkrets($r) {
        echo 2 * pi() * $r;
    }


    
?>