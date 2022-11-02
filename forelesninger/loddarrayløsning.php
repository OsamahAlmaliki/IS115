<?php
    //Vi lager først loddene våres, her bruker vi en for-setning for å oppgi hvor mange vi skal ha
    //Ved å lage en tom array så kan vi legge til verdier i den etterhvert
    $lodd = array();
    echo "Dine lodd er <br>";
    for($i=1; $i<=5; $i++) {
        $dette_lodd = rand(1, 100);
        //Her legger vi til verdier i det tomme arrayet.
        $lodd[] = $dette_lodd;
        echo $dette_lodd . "<br>";
    }
    sort($lodd);
    print_r($lodd);

    $vinnerlodd = rand(1, 100);
    if(in_array($vinnerlodd, $lodd)) {
        echo "<br>Du vant med loddnummer: " . $vinnerlodd;
    }
?>