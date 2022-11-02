<?php
    //Denne if-setningen er for å sjekke innenfor flere rammer, tegnet "||" betyr 'og' i PHP
    if(date('N') < 1 || date('N') < 5) {
        echo "Dette er en skoledag.";
    }
    else {
        echo "Dette er ikke en skoledag.";
    }
?>