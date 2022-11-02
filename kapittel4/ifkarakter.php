<?php
    $poengsum = 90;
    if($poengsum >= 87) {
        echo "Karakter A";
    }
    elseif($poengsum >= 73) {
        echo "Karakter B";
    }
    elseif($poengsum >= 59) {
        echo "Karakter C";
    }
    elseif($poengsum >= 45) {
        echo "Karakter D";
    }
    elseif($poengsum >= 31) {
        echo "Karakter E";
    }
    else {
        echo "Du har dessverre ikke bestått prøven.";
    }
?>