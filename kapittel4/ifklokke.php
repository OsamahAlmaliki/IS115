<?php
    //Denne if-setningen er for å sjekke innenfor flere rammer, tegnet "||" betyr 'og' i PHP
    if(date('H') < 8 || date('H') > 16) {
        echo "Dette er din fritid.";
    }
    else {
        echo "Nå har du skole.";
    }
?>