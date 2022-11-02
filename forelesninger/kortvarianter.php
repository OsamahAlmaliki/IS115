<?php
    # Det er ingen problemer med denne koden, men her så kan kortvarianten av den bli brukt
    if ($poengsum >= 30) {
        echo "Du har bestått.";
    }
    else {
        echo "Du har dessverre ikke bestått.";
    }

    # Kortvarianten for if() ser sånn her ut:
    # For if så vil parameter komme til venstre for spørsmålstegnet og output vil komme til høyre for spørsmålstegnet
    # Else setningen vil komme etter et kolon.
    echo $poengsum >= 30 ? "Du har bestått." : "Du har dessverre ikke bestått";
?>