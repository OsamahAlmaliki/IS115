<?php
    switch (date('N')) {
        case 1:
            echo "I dag er det din tur å lage middag.";
            break;
        case 2:
            echo "I dag er det rengjøring av rommet ditt som gjelder.";
            break;
        case 3:
            echo "I dag er det din tur til å gå tur med Laika.";
            break;
        case 4:
            echo "I dag skal du på butikken og kjøpe varer for huset.";
            break;
        case 5:
            echo "I dag må du finne et gøy spill for hele familien :) Helg!";
            break;
        default:
            echo "I dag er det helg og fortjent fridag. Kos deg!";
            break;
    }
?>