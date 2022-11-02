<?php
    $tall = 3;
    echo "Ditt opggitte tall er: $tall <br>";
    $generert = rand(1, 3);
    echo "Det genererte tallet er: $generert <br>";
    if($generert == $tall) {
        //echo "Nå er det tallet du har oppgitt lik det tallet som er generert, dette tok: forsøk.";
    }

    $number = 3;
    while($number == rand(1, 10)) {
        echo $number . "<br>";
        $number++; //($number = verdien + 1)
    }
?>