<?php
    //Denne if-setningen brukes for å sjekke datatypen i en variabel og skriver ut hvis variabel er true
    //Det er også sånn at innebygde funksjoner returnerer verdier som betyr at vi ikke må benytte operatorer
    $heltall = 7;
    if(is_int($heltall)) {
        echo "Dette er et heltall.";
    }
?>