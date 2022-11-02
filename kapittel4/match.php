<?php
    $beskjed = match((int) date('N')) {
        1 => "I dag er det din tur å lage middag.",
        2 => "I dag er det rengjøring av rommet ditt som gjelder.",
        3 => "I dag er det din tur til å gå tur med Laika.",
        4 => "I dag skal du på butikken og kjøpe varer for huset.",
        5 => "I dag må du finne et gøy spill for hele familien :) Helg!",
        default => "I dag er det helg og fortjent fridag. Kos deg!",
    };
    echo $beskjed;
?>
        