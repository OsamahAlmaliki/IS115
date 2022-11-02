
<?php
    $tekst = "Hei, dette er bare en tekst for å teste funksjoner på PHP";
    $finnord = "Hei"; $erstatning = str_repeat("A", strlen($finnord));
    if(str_contains($tekst, $finnord)) {
        $tekst = str_replace($finnord, $erstatning, $tekst);
    }
    echo $tekst;
?>