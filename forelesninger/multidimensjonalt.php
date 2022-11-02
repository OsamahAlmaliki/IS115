<?php
    //Her lager vi et multidimensjonalt array, dette vil si en array inne i en array
    $deltakere = array(
        "d1" => array(
        "navn" => "Osamah",
        "epost" => "osamah2001@hotmail.com",
        "poengsum" => 21
    ),
        "d2" => array(
        "navn" => "Arjela",
        "epost" => "arjelahamiti@hotmail.com",
        "poengsum" => 20
    ),
);
echo "<pre>";
print_r($deltakere);
echo "</pre>";

echo $deltakere["d1"]["navn"];
?>