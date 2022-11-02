<?php
    $alder = 13;
    if($alder >= 18) {
        echo "Du er voksen!";
    }
    //Man kan kjøre så mange elseif setninger under en if setning som man vil,
    //på denne måten kan man ha så mange betingelser man ønsker
    elseif($alder >= 13) {
        echo "Du er ungdom.";
    }
    //Else er det aller siste som koden kjører, dermed kan vi ikke ha flere else setninger
    else {
        echo "Du er ikke voksen.";
    }



    $navn = "Osamah";
    //Under så bruker vi to == tegn for å fortelle php at vi har lyst til å sjekke om verdien Osamah
    //er det som variabelen $navn har blitt satt til, med et = tegn vil den gjøre om variabelen
    //til å ha en ny verdi
    if($navn == "Osamah") {
        echo "Velkommen $navn!";
    }



    $tall = 1;
    //Et anropstegn foran en funksjon vil snu funksjonen om til å gjøre det motsatte
    if(!isset($tall)) {
        echo "";
    }


    
    $tall2 = "1";
    if(is_numeric($tall2)) {
        echo "";
    }



    $nummer = "Osamah";
    $returverdi = isset($nummer);
    if(is_bool($returverdi)) {
        echo "Dette er en boolsk verdi";
    }



    $rolle = "utleier";

    switch ($rolle) {
        case "utleier":
            echo "Velkommen til siden for utleiere!";
            break;
        case "leietaker":
            echo "Velkommen til siden for leietakere!";
            break;
        default:
            echo "Du må logge inn for å bruke systemet vårt.";
    }


    $rolle = "utleier";

    $returverdi = match ($rolle) {
        "utleier" => "Velkommen til siden for utleiere!",
        "leietaker" => "Velkommen til siden for leietakere!",
        default => "Du må logge inn for å bruke systemet vårt.",
    };

    var_dump($returverdi);



    $number = 1;
    while($number <= 10) {
        echo $number . "<br>";
        $number++; //($number = verdien + 1)
    }



    $nummmer = 1;
    do {
        echo $nummmer . "<br>";
        $nummmer++;
    }
    while($nummmer <= 10);



    for($i=0; $i<=10; $i++) {
        echo $i . "<br>";
    }
?>