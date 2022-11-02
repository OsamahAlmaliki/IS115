<?php
    //Noen ganger kan vi slippe å bruke klemmeparentes({}) i en if-setning
    //Dette kalles for kortvarianter
    $heltall = 7;
    if(is_int($heltall)) 
        echo "Dette er et heltall.";

    //Dette er en kortvariant (?) og (:)
    $poengsum = 29;
    echo $poengsum >= 30 ? "Du har bestått prøven." : "Du har dessverre ikke bestått prøven.";

    //Dette er den samme kortvarienten brukt på en annen måte
    $høyeste = 10;
    $annet_tall = 12;
    $høyeste = $høyeste >= $annet_tall ? $høyeste : $annet_tall;

    //En annen måte
    echo "Ordre: " . $ant_prod . " produkt" . ($ant_prod != 1 ? "er" : "");
    $admin = ($autorisasjon == "admin") ? true : false;
    $resultalt = $tall1 ?: $tall2;
?>