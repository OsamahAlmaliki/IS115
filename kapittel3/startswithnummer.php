<!--Den første koden sjekker om et nummer starter med et bestemt tall og returnerer 1 som er true og 0 for false,
den andre koden er for å gjøre alle bokstaver til små bokstaver og deretter gjøre første bokstav til storbokstav=brukt for navn for eksempel-->
<?php
    $boolsk = str_starts_with("99887766", "9");
    echo $boolsk;

    echo strlen($boolsk); // 9 

    $tall = 1234;

    echo "<br>";

    $navn = "OsAmah";

    $navn = strtolower($navn);

    $navn = ucfirst($navn);

    echo "$navn";


?>